<?php
namespace App\Models;

use CodeIgniter\Model;

class SolicitudModel extends Model
{
    protected $table = 'solicitudes';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nombre_estudiante', 
        'rut_estudiante',
        'mensaje',
        'estado',
        'motivo_rechazo',
        'id_profesor',
        'created_at',
        'updated_at'
    ];
    
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    
    protected $validationRules = [
        'nombre_estudiante' => 'required|min_length[3]',
        'rut_estudiante' => 'required',
        'mensaje' => 'required|min_length[10]'
    ];
}