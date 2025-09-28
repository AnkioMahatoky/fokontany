<?php

namespace App\Controllers;
use App\Models\HabitantModel;

class Residence extends BaseController
{
    public function index(): string
    {
        //Affiche le formulaire
        return view('formulaire_residence');
    }

    public function affichageCertificatResidence(): string
    {
        return view('affichage_certificat_residence');
    }

    public function genererCertificatResidence()
    {
        $nomSaisie = trim($this->request->getPost('nom'));
        $cin = trim($this->request->getPost('cin'));
        $numeroCopie = trim($this->request->getPost('numeroCopie'));

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

        // $data['habitant'] = $habitant;
        return view('affichage_certificat_residence', ['habitant' => $habitant]);
    }
}
