<?php

namespace App\Controllers;
use App\Models\HabitantModel2;

class Fanampidirana extends BaseController
{
    public function index(): string
    {
        $model = new HabitantModel2();

        $data['peres'] = $model->whereIn('sexe',['Lahy','Homme'])->findAll();
        $data['meres'] = $model->whereIn('sexe',['Vavy','Femme'])->findAll();

        return view('fanampidirana', $data);
    }

    public function ajoutHabitant()
    {
        $model = new HabitantModel2();

        $nom        = trim($this->request->getPost('nom'));
        $prenom     = trim($this->request->getPost('prenom'));
        $cin        = trim($this->request->getPost('cin'));
        $numCopie   = trim($this->request->getPost('num_copie'));
        $dateNaiss  = $this->request->getPost('date_naissance');
        $lieuNaiss  = trim($this->request->getPost('lieu_naissance'));
        $sit_mat    = trim($this->request->getPost('situation_matrimoniale'));
        $sexe       = trim($this->request->getPost('sexe'));
        $prof       = trim($this->request->getPost('profession'));
        $adresse    = trim($this->request->getPost('adresse'));
        $idPere    = trim($this->request->getPost('pere'));
        $idMere    = trim($this->request->getPost('mere'));
        // $post = array_map('trim', $this->request->getPost());


        // $data = $this->request->getPost(); // récupère toutes les données du formulaire
        // $data['idPere'] = !empty($data['idPere']) ? $data['idPere'] : null;
        // $data['idMere'] = !empty($data['idMere']) ? $data['idMere'] : null;
        
        // Pour éviter les doublons
        if (!empty($cin) && $model->where('cin', $cin)->first()) {
            session()->setFlashdata('error', 'Efa voasoratra anarana anaty lisitra ny olona mitondra io laharana karapanondro io.');
            return redirect()->back()->withInput();
        }

        if (!empty($num_copie) && $model->where('num_copie', $num_copie)->first()) {
            session()->setFlashdata('error', 'Efa voasoratra anarana anaty lisitra ny olona mitondra io laharana kopia io.');
            return redirect()->back()->withInput();
        }

        $idPere = null;
        $idMere = null;

        if (!empty($pereNom)) {
            $pere = $model->where('nom', $pereNom)->first();
            if ($pere) {
                $idPere = $pere['idHabitant'];
            }
        }
    
        if (!empty($mereNom)) {
            $mere = $model->where('nom', $mereNom)->first();
            if ($mere) {
                $idMere = $mere['idHabitant'];
            }
        }

        $data = [
            'nom'        => $nom,
            'prenom'     => $prenom,
            'cin'        => $cin,
            'num_copie'  => $numCopie,
            'date_naissance' => $dateNaiss,
            'lieu_naissance' => $lieuNaiss,
            'situation_matrimoniale' => $sit_mat,
            'status' => "velona",
            'sexe'       => $sexe,
            'profession' => $prof,
            'adresse'    => $adresse,
            'idPere'     => $idPere,
            'idMere'     => $idMere,
        ];



        if ($model->insert($data)) {
            session()->setFlashdata(
                'success',
                "Tafiditra anaty lisitra i $nom $prenom!"
            );
            return redirect()->to('/fanampidirana');
        } else {
            session()->setFlashdata('error', 'Nisy olana nandritra ny fampidirana mponina !');
            return redirect()->back()->withInput();
        }
    }
}