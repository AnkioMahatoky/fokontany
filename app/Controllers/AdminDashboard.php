<?php

namespace App\Controllers;

use App\Models\HabitantModel2;

class AdminDashboard extends BaseController
{
    public function index() 
    {
        $session = session();
        $habitantModel = new HabitantModel2();

        $data['vivants']= $habitantModel->countByStatus('Velona');
        $data['decedes']= $habitantModel->countByStatus('Maty');
        $data['nbFamille'] = $habitantModel->countFamilies();
        $data['nbAdulte'] = $habitantModel->countAdults();

        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/adminConnexion')->with('error', 'Vous devez vous connecter.');
        }

        $stats = $habitantModel->getStatsMensuelles();
        $data['mois'] = !empty($stats) ? array_column($stats, 'mois') : [];
        $data['habitants'] = !empty($stats) ? array_column($stats, 'nb_habitants') : [];
        $data['deces'] = !empty($stats) ? array_column($stats, 'nb_decedes') : [];

        return view('adminDashboard', $data);
    }

    public function getDetails($type)
    {
        $habitantModel = new HabitantModel2();
        $data = [];
    
        switch($type) {
            case 'famille':
                $builder = $habitantModel->db->table('habitant h');
                $builder->select('h.idPere, h.idMere, CONCAT(pere.nom, " ", pere.prenom) AS pere,
                                  CONCAT(mere.nom, " ", mere.prenom) AS mere,
                                  GROUP_CONCAT(CONCAT(h.prenom, " ", h.nom) SEPARATOR ", ") AS enfants');
                $builder->join('habitant pere', 'pere.idHabitant = h.idPere');
                $builder->join('habitant mere', 'mere.idHabitant = h.idMere');
                $builder->where('h.idPere IS NOT NULL');
                $builder->where('h.idMere IS NOT NULL');
                $builder->groupBy(['h.idPere', 'h.idMere']);
                $data['rows'] = $builder->get()->getResultArray();
                $data['columns'] = ['ID Père', 'ID Mère', 'Père', 'Mère', 'Enfants'];
                break;
            
            case 'vivants':
                $data['rows'] = $habitantModel->where('status', 'Velona')->findAll();
                $data['columns'] = ['ID', 'Nom Complet', 'Date Naissance', 'Sexe', 'Profession'];
                break;
            
            case 'decedes':
                $data['rows'] = $habitantModel->where('status', 'Maty')->findAll();
                $data['columns'] = ['ID', 'Nom Complet', 'Date Naissance', 'Sexe', 'Profession'];
                break;
            
            case 'adultes':
                $builder = $habitantModel->db->table('habitant');
                $builder->select('idHabitant, CONCAT(nom, " ", prenom) AS nom_complet, date_naissance, sexe, profession');
                $builder->where('DATE_ADD(date_naissance, INTERVAL 18 YEAR) <= CURDATE()');
                $data['rows'] = $builder->get()->getResultArray();
                $data['columns'] = ['ID', 'Nom Complet', 'Date Naissance', 'Sexe', 'Profession'];
                break;
            
            default:
                $data['rows'] = [];
                $data['columns'] = [];
        }
    
        return $this->response->setJSON($data);
    }

}
