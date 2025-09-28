<?php

namespace App\Controllers;
use App\Models\HabitantModel2;

class Antotanisa extends BaseController {
    public function index() 
    {
        $habitantModel = new HabitantModel2();

        $data['title'] = 'Antotan\'isan\'ny mponina';

        $data['vivants'] = $habitantModel->countByStatus('Velona');
        $data['decedes'] = $habitantModel->countByStatus('Maty');
        $data['adultes'] = $habitantModel->countAdults();
        $data['mineurs'] = $habitantModel->countMinors();
        $data['familles'] = $habitantModel->countFamilies();
        $data['marie'] = $habitantModel->countMarie();
        $data['celibat'] = $habitantModel->countCelibat();
        $data['veuf'] = $habitantModel->countVeuf();

        $stats = $habitantModel->getStatsMensuelles();
        $data['mois'] = !empty($stats) ? array_column($stats, 'mois') : [];
        $data['habitants'] = !empty($stats) ? array_column($stats, 'nb_habitants') : [];
        $data['deces'] = !empty($stats) ? array_column($stats, 'nb_decedes') : [];

        return view('antotanisa', $data);
    }
}