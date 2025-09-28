<?php

namespace App\Models;

use CodeIgniter\Model;

class UtilisateurModel extends Model
{
    protected $table      = 'utilisateur';
    protected $primaryKey = 'idUtilisateur';
    protected $allowedFields = ['nom', 'telephone', 'mot_de_passe', 'type'];
}
