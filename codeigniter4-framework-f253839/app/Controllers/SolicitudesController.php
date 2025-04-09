<?php
namespace App\Controllers;

class SolicitudesController extends BaseController
{
    public function index()
    {
        // Datos de ejemplo (reemplazarlos con datos de la base de datos)
        $data['solicitudes'] = [
            [
                'nombre' => 'Allan Vallejos',
                'mensaje' => 'Voy mañana profe a hablar de la tesis que me está quedando muy mal.',
                'hora' => '11:20'
            ],
            [
                'nombre' => 'María Pérez',
                'mensaje' => 'Necesito ayuda con el proyecto final.',
                'hora' => '14:30'
            ],
            [
                'nombre' => 'Juan González',
                'mensaje' => '¿Podría revisar mi avance?',
                'hora' => '09:15'
            ]
        ];

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