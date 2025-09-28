<?php

namespace App\Controllers;
use App\Models\UtilisateurModel;

class AdminConnexion extends BaseController
{
    public function index()
    {
        return view('adminConnexion');
    }

    public function submit() {
        $session = session();
        $model = new UtilisateurModel();

        $nom = $this->request->getPost('nom');
        $mot_de_passe = $this->request->getPost('mot_de_passe');

        $utilisateur = $model->where('nom', $nom)->first();

        if($utilisateur){
            if($mot_de_passe === $utilisateur['mot_de_passe']) {
                // Mot de passe correct, enregistre session
                if ($utilisateur['type'] === 'admin') {
                    $session->set([
                        'id_utilisateur' => $utilisateur['idUtilisateur'],
                        'nom' => $utilisateur['nom'],
                        'isLoggedIn' => true
                    ]);

                    return redirect()->to('adminDashboard')->with('success', 'Connexion réussie !'); 
                } else {
                    return redirect()->back()->with('error','Tsy manana alalana ianao.');
                }

            } else {
                // Mot de passe incorrect
                return redirect()->back()->with('error', 'Teny miafina misy diso.');
            }
        } else {
            // Nom utilisateur non trouvé
            return redirect()->back()->with('error', 'Tsy misy io anarana io.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/adminConnexion');
    }
}
