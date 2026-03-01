<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModelUsuarios extends Model{
    protected $table      = 'usuario';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id_usuario';
     protected $allowedFields = ['nombre',  'telefono',  'contrasena',  'pregunta', 'respuesta_pregunta'];
}