<?php
namespace App\Models;
use CodeIgniter\Model;

class HabitantModel extends Model
{
    protected $table = 'habitant';
    protected $primaryKey = 'idHabitant';
    protected $allowedFields = ['nom','prenom','cin','num_copie','date_naissance',
    'lieu_naissance', 'situation_matrimoniale', 'status', 'adresse', 'sexe', 'profession', 'idPere', 'idMere'];

    public function getByCIN($cin) {
        // return $this->db->where('cin', $CIN)->get('habitant')->row();
        return $this->select ('h1.*,pere.nom as pere_nom, mere.nom as mere_nom')
                    ->from('habitant h1')
                    ->join('habitant pere', 'h1.idPere = pere.idHabitant', 'left')
                    ->join('habitant mere', 'h1.idMere = mere.idHabitant', 'left')
                    ->where('h1.cin', $cin)
                    ->first();
                    // ->getRowArray();
    }

    public function getByNumeroCopie($num_copie)
    {
        return $this->db->table('habitant h')
                        ->select('h.*, pere.nom as pere_nom, mere.nom as mere_nom')
                        ->join('habitant pere', 'h.idPere = pere.idHabitant', 'left')
                        ->join('habitant mere', 'h.idMere = mere.idHabitant', 'left')
                        ->where('h.num_copie', $num_copie)
                        ->get()
                        ->getRowArray();
    }

}