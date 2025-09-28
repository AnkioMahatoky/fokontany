<?php

namespace App\Controllers;

use App\Models\UtilisateurModel;

class AdminInscription extends BaseController
{
    public function index()
    {   
        return view('adminInscription');
    }

    public function submit()
    {
        $utilisateurModel = new UtilisateurModel();

        $nom          = $this->request->getPost('nom');
        $telephone    = $this->request->getPost('telephone');
        $mot_de_passe = $this->request->getPost('mot_de_passe');
        $confirm_mdp  = $this->request->getPost('confirm_mdp');

        if ($mot_de_passe !== $confirm_mdp) {
            return redirect()->back()->with('error', 'Les mots de passe ne correspondent pas !');
        }

        $existingUser = $utilisateurModel->where('nom', $nom)->first();
        if ($existingUser) {
            return redirect()->back()->withInput()->with('error', 'Ce nom est déjà utilisé !');
        }

        $data = [
            'nom'         => $nom,
            'telephone'   => $telephone,
            // 'mot_de_passe'=> password_hash($this->request->getPost('mot_de_passe'), PASSWORD_DEFAULT),
            'mot_de_passe'=> $mot_de_passe,
            'type'        => 'admin' // imposé en dur
        ];

        $utilisateurModel->insert($data);
        
        return redirect()->to('/adminConnexion')->with('success', 'Inscription réussie !');
    }
}
