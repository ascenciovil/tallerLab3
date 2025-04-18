<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Solicitudes - Profesor</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #f5f5f5;
    }
    .navbar {
      background-color: #b70000;
      padding: 10px;
      display: flex;
      align-items: center;
      color: white;
    }
    .navbar button{
      margin: 0 10px;
      padding: 10px;
      border: none;
      cursor: pointer;
      background-color: #b70000;
      color: white;
    }
    .navbar .rut {
      margin-left: auto;
      padding: 10px;
      background-color: #b70000;
      color: white;
    }
    .navbar button.active {
      background-color: #f5f5f5;
      border-color: black ;
      color: #e60000;
      border-radius: 10px;
    }
    .container {
      padding: 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }
    .card {
      background: white;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      padding: 15px;
      width: 200px;
    }
    .card h4 {
      margin: 0 0 10px 0;
    }
    .card p {
      font-size: 14px;
      margin: 0 0 10px 0;
    }
    .card .time {
      margin-bottom: 10px;
      font-weight: bold;
    }
    .card .buttons {
      display: flex;
      justify-content: space-between;
    }
    .card .buttons button {
      width: 45%;
      padding: 5px;
      border: none;
      border-radius: 3px;
      color: white;
      cursor: pointer;
    }
    .accept {
      background-color: #00c800;
    }
    .decline {
      background-color: #e60000;
    }
    .footer {
      background-color: #b70000;
      color: white;
      text-align: center;
      padding: 10px;
      position: fixed;
      width: 100%;
      bottom: 0;
    }
    .footer button {
      float: right;
      margin-right: 20px;
      padding: 5px 10px;
      background: #666;
      border: none;
      color: white;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <img src="./img/utalblanco.png" alt="Logo" height="40">
    <button>Inicio</button>
    <button>Configurar horario</button>
    <button class="active">Solicitudes</button>
    <button>Marcar asistencia</button>
    <div class="rut">12345678-9</div>
  </div>

  <div class="container">
    <?php foreach ($solicitudes as $solicitud): ?>
      <div class="card">
        <h4><?= esc($solicitud['Nombre']) ?></h4>
        <p><?= esc($solicitud['Comentario']) ?></p>
        <div class="time"><?= esc($solicitud['Fecha']) ?></div>
        <div class="buttons">
          <button class="accept">Aceptar</button>
          <button class="decline">Declinar</button>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="footer">
    Hecho por y para estudiantes
    <button>Informar de error</button>
  </div>
</body>
</html>