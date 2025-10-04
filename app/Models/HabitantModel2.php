<?php

namespace App\Models;

use CodeIgniter\Model;

class HabitantModel2 extends Model
{
    protected $table = 'habitant';
    protected $primaryKey = 'idHabitant';
    protected $allowedFields = [
        'nom','prenom','date_naissance',
        'lieu_naissance','status','num_copie',
        'cin','adresse','profession',
        'situation_matrimoniale','idPere','idMere','sexe'
    ];

    public function countByStatus($status)
    {
        return $this->where('status', $status)->countAllResults();
    }

    public function countFamilies()
    {
        $builder = $this->db->table('habitant h');
        $builder->select('h.idPere, h.idMere');
        $builder->join('habitant pere', 'pere.idHabitant = h.idPere');
        $builder->join('habitant mere', 'mere.idHabitant = h.idMere');
        $builder->where('h.idPere IS NOT NULL');
        $builder->where('h.idMere IS NOT NULL');
        $builder->groupBy(['h.idPere', 'h.idMere']);

        return $builder->countAllResults();
    }

    public function countAdults()
    {
        $builder = $this->db->table('habitant');
        $builder->where('DATE_ADD(date_naissance, INTERVAL 18 YEAR) <= CURDATE()');
    
        return $builder->countAllResults();
    }

    public function countMinors()
    {
        $builder = $this->db->table('habitant');
        $builder->where('DATE_ADD(date_naissance, INTERVAL 18 YEAR) > CURDATE()');
    
        return $builder->countAllResults();
    }

    public function listeHabitant()
    {
        $builder = $this->db->table('habitant h');
        $builder->select('h.idHabitant, CONCAT(h.nom, " ", h.prenom) AS nom_complet, 
                        IFNULL(h.CIN, "-") AS cin, 
                        h.date_naissance, h.lieu_naissance, h.adresse, h.sexe, h.status,
                        h.situation_matrimoniale, h.profession, h.num_copie,
                        IFNULL(CONCAT(pere.nom, " ", pere.prenom), "-") AS pere,
                        IFNULL(CONCAT(mere.nom, " ", mere.prenom), "-") AS mere');
        $builder->join('habitant pere', 'pere.idHabitant = h.idPere', 'left');
        $builder->join('habitant mere', 'mere.idHabitant = h.idMere', 'left');

        return $builder->get()->getResultArray();
    }

    public function countMarie() {
        return $this->where('situation_matrimoniale', 'Manambady')->countAllResults();
    }

    public function countCelibat() {
        return $this->where('situation_matrimoniale', 'Mpitovo')->countAllResults();
    }

    public function countVeuf() {
        return $this->where('situation_matrimoniale', 'Nisara-panambadiana')->countAllResults();
    }

    public function getStatsMensuelles()
    {
        $builder = $this->db->table('statistiques');
        $builder->select("DATE_FORMAT(mois, '%Y-%m') as mois, nb_habitants, nb_decedes");
        $builder->orderBy('mois', 'ASC');
        return $builder->get()->getResultArray();
    }

    public function updateStatsMensuelles()
    {
        // Récupérer le mois courant
        $mois = date('Y-m-01'); // le 1er jour du mois courant

        // Compter le nombre total d'habitants et le nombre de décès
        $totalHabitants = $this->countAllResults();
        $totalDecedes = $this->where('status', 'Maty')->countAllResults();

        // Vérifier si une entrée pour ce mois existe déjà
        $builder = $this->db->table('statistiques');
        $existing = $builder->where('mois', $mois)->get()->getRowArray();

        if($existing){
            // Mise à jour
            $builder->where('mois', $mois)->update([
                'habitants_total' => $totalHabitants,
                'decedes_total' => $totalDecedes
            ]);
            echo 'Misy';
        } else {
            // Nouvelle entrée
            $builder->insert([
                'mois' => $mois,
                'habitants_total' => $totalHabitants,
                'decedes_total' => $totalDecedes
            ]);
            echo 'Tsy misy';
        }
    }


}
