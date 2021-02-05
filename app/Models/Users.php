<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    //Funcion traer usuario
    public function getUser($data)
    {
        //Declaración de variable con tabla usuario
        $User = $this->db->table('users');
        //Comparación de tabla con datos enviados desde controlado
        $User->where($data);
        //Retorno de resultados de la comparación
        return $User->get()->getResultArray();
    }
}
