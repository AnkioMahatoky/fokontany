<?php

namespace App\Controllers;
use App\Models\HabitantModel2;

class Mponina extends BaseController
{
    public function index()
    {
        $habitantModel = new HabitantModel2();
        $session = session();

        // Exemple : récupérer tous les habitants pour le tableau
        $data['habitants'] = $habitantModel->listeHabitant();

        // Passer d'autres infos si nécessaire
        $data['title'] = 'Lisitry ny mponina';

        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/adminConnexion')->with('error', 'Vous devez vous connecter.');
        }

        return view('mponina', $data);
    }

    public function update()
    {
        $habitantModel = new HabitantModel2();

        $id = $this->request->getPost('id');
        $data = $this->request->getPost('data');

        // Gestion du nom complet (nom + prénom séparés)
        if (isset($data['nom_complet'])) {
            $parts = explode(" ", $data['nom_complet'], 2);
            $data['nom'] = $parts[0] ?? '';
            $data['prenom'] = $parts[1] ?? '';
            unset($data['nom_complet']);
        }

        // 🔹 Gestion spéciale du CIN (retour à NULL si vide ou "-")
        if (isset($data['cin'])) {
            $cin = trim($data['cin']);
            if ($cin === '' || $cin === '-') {
                $data['CIN'] = null;   // correspond à la colonne en BDD
            } else {
                $data['CIN'] = $data['cin'];
            }
        }

        $habitantModel->update($id, $data);
        // $habitantModel->updateStatsMensuelles();

        return $this->response->setJSON(['status' => 'success']);
    }

    public function delete()
    {
        $session = session();
        $userId = $session->get('id_utilisateur'); // id de l'utilisateur connecté
        $passwordInput = $this->request->getPost('password');
        $idToDelete = $this->request->getPost('id');

        $userModel = new \App\Models\UtilisateurModel();
        $user = $userModel->find($userId);

        if(!$user || !($passwordInput === $user['mot_de_passe'])){
            return $this->response->setJSON(['success'=>false, 'message'=>'Mot de passe incorrect']);
        }

        $habitantModel = new HabitantModel2();
        if($habitantModel->delete($idToDelete)){
            return $this->response->setJSON(['success'=>true]);
        } else {
            return $this->response->setJSON(['success'=>false, 'message'=>'Impossible de supprimer']);
        }
    }


}
