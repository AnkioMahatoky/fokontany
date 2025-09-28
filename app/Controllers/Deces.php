<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\HabitantModel;

class Deces extends BaseController
{
    public function certificatDeces(): string
    {
        return view('formulaire_deces');
    }
    public function genererCertificatDeces(): string
    {
        $nomSaisie = trim($this->request->getPost('nom'));
        $prenom = trim($this->request->getPost('prenom'));
        $cin = trim($this->request->getPost('cin'));
        $numeroCopie = trim($this->request->getPost('numeroCopie'));
        $mpitsabo = trim($this->request->getPost('mpitsabo'));
        $date = trim($this->request->getPost('date'));
        $heure = trim($this->request->getPost('heure'));
        $motif = trim($this->request->getPost('motif'));

        $model = new HabitantModel();
        $habitant = null;

        if(!empty($cin))
        {
            //Si cin rempli
            $habitant = $model->getByCIN($cin);
            if(!$habitant)
            {
                session()->setFlashdata('error', 'Tsy misy olona manana io laharana karapanondro io ao anaty lisitra');
                return redirect()->back()->withInput();
            }
            if (strcasecmp($habitant['nom'], $nomSaisie) !== 0) {
                session()->setFlashdata('error', 'Hamarino ny anarana nosoratanao');
                return redirect()->back()->withInput();
            }
        } elseif(!empty($numeroCopie))
        {
            $habitant = $model->getByNumeroCopie($numeroCopie);
            if(!$habitant)
            {
                session()->setFlashdata('error', 'Tsy misy olona manana io laharana kopia io ao anaty lisitra');
                return redirect()->back()->withInput();
            }
            if (strcasecmp($habitant['nom'], $nomSaisie) !== 0) {
                session()->setFlashdata('error', 'Hamarino ny anarana nosoratanao');
                return redirect()->back()->withInput();
            }
        } else {
            session()->setFlashdata('error', 'Fenoy ny laharana karapanondro na laharana kopia');
            return redirect()->back()->withInput();
        }
        return view('affichage_certificat_deces', ['habitant' => $habitant,'mpitsabo'=>$mpitsabo,'date'=>$date,'heure'=>$heure,'motif'=>$motif]);
    }

}
