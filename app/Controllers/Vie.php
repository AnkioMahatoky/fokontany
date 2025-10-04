<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\HabitantModel;

class Vie extends BaseController
{
    public function affichageCertificatVie(): string
    {
        return view('affichage_certificat_vie');
    }

    public function certificatVie(): string
    {
        return view('formulaire_vie');
    }

    public function genererCertificatVie()
    {
        $nomSaisie = trim($this->request->getPost('nom'));
        $cin = trim($this->request->getPost('cin'));
        $numeroCopie = trim($this->request->getPost('numeroCopie'));

        $model = new HabitantModel();
        $habitant = null;
        //controle input user
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

        // $data['habitant'] = $habitant;
        return view('affichage_certificat_vie', ['habitant' => $habitant]);
    }
}
