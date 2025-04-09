<?php
namespace App\Controllers;
use App\Models\SolicitudModel;

class SolicitudesController extends BaseController
{
    public function index()
    {
        // Datos de ejemplo (reemplazarlos con datos de la base de datos)
        $model = new SolicitudModel();

        // Obtenemos todos los datos de la tabla
        $data['solicitudes'] = $model->findAll();

        // Cargar la vista con los datos
        return view('Solicitudes', $data);
    }

    public function aceptar($id) 
    {
        // Lógica para aceptar una solicitud (ej: actualizar estado en BD)
        // return redirect()->to('/solicitudes');
    }

    public function declinar($id) 
    {
        // Lógica para rechazar una solicitud
        // return redirect()->to('/solicitudes');
    }
}