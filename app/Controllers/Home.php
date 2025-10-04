<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\HabitantModel;

class Home extends BaseController
{
    public function seconnecter(): string
    {
        return view('seconnecter');
    }

    public function inscription(): string
    {
        return view('inscription');
    }

    public function sinscrire()
    {
        $model = new UserModel();
        extract($_POST);
        if($mdp === $cmdp){
            $data = [
                'nom'=>$nom,
                'telephone'=>$tel,
                'mot_de_passe'=>$mdp
            ];
            $model->insert($data);
            return redirect()->to('/seconnecter');//redirection de la page
        }
        else{
            // echo "<script>alert('Champ incorrecte, remplisser bien le champ')</script>";
            return view('inscription',['erreur'=>'Teny miafina tsy mitovy!!']);
        }
    }

    public function connexion()
    {
        $model = new UserModel();
        $session = session(); // démarre la session

        $nom = $this->request->getPost('nom');
        $mdp = $this->request->getPost('mdp');

        $users = $model->where('nom', $nom)->findAll();

        foreach ($users as $val) {
            if ($val['mot_de_passe'] == $mdp) {
                //L'utilisateur est connecté => on stocke en session
                $session->set('estConnecte', true);
                return redirect()->to('/accueil'); // redirection sécurisée
            }
        }

        return view('seconnecter', ['erreur' => 'Anarana na teny miafina misy diso!!']);
    }


    public function accueil()
    {
        $session = session();

        return view('accueil');
    }

    public function deconnexion()
    {
        session()->destroy();
        return redirect()->to('/accueil');
    }

    public function enregistrement()
    {
        return view('enregistrement');
    }

    // public function ajoutHabitant()
    // {
    //     $model = new HabitantModel();

    //     $data = $this->request->getPost(); // récupère toutes les données du formulaire
    //     $data['idPere'] = !empty($data['idPere']) ? $data['idPere'] : null;
    //     $data['idMere'] = !empty($data['idMere']) ? $data['idMere'] : null;
    //     if ($model->insert($data)) {
    //         return redirect()->to('/enregistrement')->with('message', 'Habitant ajouté avec succès !');
    //     } else {
    //         return redirect()->back()->withInput()->with('error', 'Erreur lors de l\'insertion.');
    //     }
    // }

    public function ajoutHabitant()
    {
        $model = new HabitantModel();

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
        $pereNom    = trim($this->request->getPost('pere'));
        $mereNom    = trim($this->request->getPost('mere'));
        // $post = array_map('trim', $this->request->getPost());


        // $data = $this->request->getPost(); // récupère toutes les données du formulaire
        // $data['idPere'] = !empty($data['idPere']) ? $data['idPere'] : null;
        // $data['idMere'] = !empty($data['idMere']) ? $data['idMere'] : null;
        
        //Pour éviter les doublons
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
            return redirect()->to('/enregistrement');
        } else {
            session()->setFlashdata('error', 'Nisy olana nandritra ny fampidirana mponina !');
            return redirect()->back()->withInput();
        }
    }
}
