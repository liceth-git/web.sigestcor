<?php
include_once "controladores/conexion.php";

$mensaje = ""; // Inicializamos una variable para el mensaje

function obtenerCedulas() {
    global $conn;

    $cedulas = array();

    $query = "SELECT documento FROM persona WHERE pre_registro = 0"; 
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cedulas[] = $row['documento'];
        }
    }

    return $cedulas;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero-documento"], $_POST["nombre-usuario"], $_POST["contrasena"], $_POST["rol"])) {
    // Procesa el formulario aquí

    $numeroDocumento = $_POST["numero-documento"];
    $nombreUsuario = $_POST["nombre-usuario"];
    $contrasena = $_POST["contrasena"];
    $rol = $_POST["rol"];

    // Validación básica de los campos (puedes agregar más validaciones según tus necesidades)
    if (empty($numeroDocumento) || empty($nombreUsuario) || empty($contrasena) || empty($rol)) {
        $mensaje = "Por favor, completa todos los campos.";
    } else {
        global $conn;

        // Actualiza los datos directamente sin verificar la existencia de la persona
        $sql_update = "UPDATE persona SET usuario=?, password_hash=?, IdRol=? WHERE documento=?";
        $stmt_update = $conn->prepare($sql_update);

        // Cifra la contraseña antes de almacenarla en la base de datos
        $contrasenaCifrada = password_hash($contrasena, PASSWORD_DEFAULT);

        $stmt_update->bind_param("ssss", $nombreUsuario, $contrasenaCifrada, $rol, $numeroDocumento);

        if ($stmt_update->execute()) {
            $mensaje = "La asignación se ha realizado con éxito.";
        } else {
            $mensaje = "Error al asignar la información.";
        }
    }
}
?>

