<?php
session_start();
if (isset($_SESSION["nombre"]) && isset($_SESSION["rol"])) {
    $nombreUsuario = $_SESSION["nombre"];
    $rolUsuario = $_SESSION["rol"];
    if ($rolUsuario === "Administrador") {
    } else {
        header("Location: acceso_denegado.php");
        exit();
    }
} else {
    header("Location: for_login.php");
    exit();
}
?>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/datatable.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/estilosformsolicitud.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <title>SIGESTCOR</title>
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
          <div class="user-profile">
            <div class="profile-image">
            <img src="images/user.png" alt="User Image">
            </div>
                <h2><?php echo $nombreUsuario; ?></h2>
                <p><?php echo $rolUsuario; ?></p>
            </div>
          <ul class="menu">
            <li><a href="inicioadmin.php"><i class="fas fa-home"></i> Inicio</a></li>
            <li><a href="solicitudes_admin.php"><i class="fas fa-tasks"></i> Solicitudes</a></li>
            <li><a href="entrantesadmin.php"><i class="fas fa-download"></i> Entrantes</a></li>
            <li><a href="corresp_admin.php"><i class="fas fa-upload"></i> Correspondencia</a></li>
            <li><a href="administracion.php"><i class="fas fa-cog"></i> Administración</a></li>
            <li><a href="for_login.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
          </ul>
        </div>
    <div class="content">
        <div class="navbar">
          <div class="logo">
            <img src="images/carta_logo.png" alt="Logo">
            <img src="images/letra_sigestcor.png" alt="letra logo" style="width: 100px; height: 20px;">
          </div>
          <div class="notifications">
            <i class="fas fa-bell"></i>
            <span class="badge">5</span>
          </div>
        </div>

        <button id="btnCrear">Crear</button>
        <div id="formularioCrear" style="display: none;">
        <fieldset>
  <form>
    <label for="fechaSolicitud">Fecha de Solicitud:</label>
    <input type="date" id="fechaSolicitud" name="fechaSolicitud" required><br>

    <label for="deptoOrigen">Departamento de Origen:</label>
    <input type="text" id="deptoOrigen" name="deptoOrigen" required><br>

    <label for="deptoDestino">Departamento de Destino:</label>
    <input type="text" id="deptoDestino" name="deptoDestino" required><br>

    <label for="observaciones">Observaciones:</label>
    <textarea id="observaciones" name="observaciones"></textarea><br>

    <label for="archivos">Archivos:</label>
    <input type="file" id="archivos" name="archivos" multiple><br><br>

    <input type="submit" value="Guardar">
  </form>
</fieldset>
</div>

                   
        <table id="miTabla" class="display">
          <thead>
              <tr>
                  <th>Número de Correspondencia</th>
                  <th>Fecha de Solicitud</th>                  
                  <th>Dpto Origen</th>
                  <th>Dpto Destino</th>
                  <th>Estado</th>
                  <th>Descripción</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>001</td>
                  <td>Nombre del Destinatario 1</td>
                  <td>2023-09-15</td>
                  <td>Asunto 1</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>002</td>
                  <td>Nombre del Destinatario 2</td>
                  <td>2023-09-16</td>
                  <td>Asunto 2</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>002</td>
                  <td>Nombre del Destinatario 2</td>
                  <td>2023-09-16</td>
                  <td>Asunto 2</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>002</td>
                  <td>Nombre del Destinatario 2</td>
                  <td>2023-09-16</td>
                  <td>Asunto 2</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>002</td>
                  <td>Nombre del Destinatario 2</td>
                  <td>2023-09-16</td>
                  <td>Asunto 2</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>002</td>
                  <td>Nombre del Destinatario 2</td>
                  <td>2023-09-16</td>
                  <td>Asunto 2</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>002</td>
                  <td>Nombre del Destinatario 2</td>
                  <td>2023-09-16</td>
                  <td>Asunto 2</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>002</td>
                  <td>Nombre del Destinatario 2</td>
                  <td>2023-09-16</td>
                  <td>Asunto 2</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>002</td>
                  <td>Nombre del Destinatario 2</td>
                  <td>2023-09-16</td>
                  <td>Asunto 2</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>002</td>
                  <td>Nombre del Destinatario 2</td>
                  <td>2023-09-16</td>
                  <td>Asunto 2</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>002</td>
                  <td>Nombre del Destinatario 2</td>
                  <td>2023-09-16</td>
                  <td>Asunto 2</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>002</td>
                  <td>Nombre del Destinatario 2</td>
                  <td>2023-09-16</td>
                  <td>Asunto 2</td>
                  <td></td>
                  <td></td>
              </tr>

          </tbody>
      </table>
        
    </div>
    </div>
    
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.2/xlsx.full.min.js"></script>
    
    <script>
    $(document).ready(function() {
        $('#miTabla').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json" // Configura el idioma a español
            },
            "searching": true 
        });

        $('#btnCrear').click(function() {
        $('#formularioCrear').toggle();
        });
    });
    </script>


    
    
</body>
</html>