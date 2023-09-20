<?php
session_start();
include_once "conexion.php";

if (isset($_POST["Bntingresar"])) {
    $usuario = $_POST["usuario"];
    $clave = $_POST["password"];
    
    if (!empty($usuario) && !empty($clave)) {
  
        $stmt = $conn->prepare("SELECT p.documento, p.Pnombre, p.Papellido, r.descripcion AS rol
                                FROM persona AS p
                                INNER JOIN rol AS r ON p.IdRol = r.IdRol
                                WHERE p.Usuario = ? AND p.password_hash = ?");
        
        if ($stmt) {
            $stmt->bind_param("ss", $usuario, $clave);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows == 1) {
                $datos = $result->fetch_object();
                $_SESSION["documento"] = $datos->documento;
                $_SESSION["nombre"] = $datos->Pnombre;
                $_SESSION["apellido"] = $datos->Papellido;
                $_SESSION["rol"] = $datos->rol;
                if ($_SESSION["rol"] == "Administrador") {
                    header("Location:inicioadmin.php ");
                    exit();
                } elseif ($_SESSION["rol"] == "Funcionario") {
                    header("Location:iniciofuncionario.php ");
                    exit();
                } elseif ($_SESSION["rol"] == "Radicador") {
                    header("Location:inicioradicador.php ");
                    exit();
                } else {
                    header("Location: acceso_denegado.php");
                    exit();
                }
            } else {
                echo "Acceso denegado";
            }
            
            $stmt->close();
        } else {
            // Manejo de errores si la consulta preparada no se pudo crear
            echo "Error en la consulta preparada: " . $conn->error;
        }
    } else {
        echo "Los campos están vacíos";
    }
}
?>

?>
