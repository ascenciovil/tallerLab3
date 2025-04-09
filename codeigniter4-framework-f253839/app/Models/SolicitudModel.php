<?php

namespace App\Models;

use CodeIgniter\Model;

class SolicitudModel extends Model
{
    protected $table = 'vista1';
    protected $primaryKey = 'Id';
    protected $allowedFields = ['Nombre', 'Comentario', 'Fecha','Estado'];
    protected $returnType = 'array'; // Para que devuelva arrays asociativos
}