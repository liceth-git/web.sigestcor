
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/script.js"></script>
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
            <li><a href="index.html"><i class="fas fa-home"></i> Inicio</a></li>
            <li><a href="error500.html"><i class="fas fa-tasks"></i> Solicitudes</a></li>
            <li><a href="error404.html"><i class="fas fa-download"></i> Entrantes</a></li>
            <li><a href="salientes.html"><i class="fas fa-upload"></i> Salientes</a></li>
            <li><a href="radicador.html"><i class="fas fa-upload"></i> Radicación</a></li>
            <br>
            <br>
            <br>
            <li><a href="formularioinicio.html"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
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
    
</body>
</html>