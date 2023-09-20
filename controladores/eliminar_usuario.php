<?php
include_once "controladores/conexion.php";

function obtenerDetallesUsuario($numeroDocumento) {
    global $conn;

    $query = "SELECT persona.*, telefono.telefono, correo.email, rol.Descripcion 
              FROM persona
              LEFT JOIN telefono ON persona.documento = telefono.documento
              LEFT JOIN correo ON persona.documento = correo.documento
              LEFT JOIN rol ON persona.idRol = rol.idRol
              WHERE persona.documento = ?";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $numeroDocumento);
    $stmt->execute();
    $result = $stmt->get_result();

    return $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numeroDocumento"])) {
    $numeroDocumento = $_POST["numeroDocumento"];

    if (isset($_POST["confirm-delete"])) {
        // Eliminar registros relacionados primero
        $query = "DELETE FROM radicados WHERE IdFuncionario IN (SELECT id_funcionario FROM funcionario WHERE documento = ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $numeroDocumento);
        $stmt->execute();

        $query = "DELETE FROM funcionario WHERE documento = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $numeroDocumento);
        $stmt->execute();

        $query = "DELETE FROM administrador WHERE documento = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $numeroDocumento);
        $stmt->execute();

        // Luego, eliminar el usuario
        $query = "DELETE FROM persona WHERE documento = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $numeroDocumento);

        if ($stmt->execute()) {
            echo "Usuario y registros relacionados eliminados correctamente.";
        } else {
            echo "Error al eliminar el usuario.";
        }
    } else {
        // Obtener detalles del usuario
        $usuario = obtenerDetallesUsuario($numeroDocumento);

        echo "<h2>Detalles del Usuario</h2>";

        if ($usuario) {
            echo "<br>";
            echo "<div id='user-delete-details'>";
            echo "<h3>Detalles del Usuario</h3>";
            echo "<table border='1'>";
            echo "<tr><th>Documento</th><th>Tipo de Documento</th><th>Primer Nombre</th><th>Segundo Nombre</th><th>Primer Apellido</th><th>Segundo Apellido</th><th>Teléfono</th><th>Correo Electrónico</th><th>Rol</th></tr>";
            echo "<tr>";
            echo "<td>" . $usuario["documento"] . "</td>";
            echo "<td>" . $usuario["tipoDocumento"] . "</td>";
            echo "<td>" . $usuario["Pnombre"] . "</td>";
            echo "<td>" . $usuario["Snombre"] . "</td>";
            echo "<td>" . $usuario["Papellido"] . "</td>";
            echo "<td>" . $usuario["Sapellido"] . "</td>";
            echo "<td>" . $usuario["telefono"] . "</td>";
            echo "<td>" . $usuario["email"] . "</td>";
            echo "<td>" . $usuario["Descripcion"] . "</td>";
            echo "</tr>";
            echo "</table>";

            echo "<br>";
            echo "<form action='' method='POST'>";
            echo "<input type='hidden' name='numeroDocumento' value='$numeroDocumento'>";
            echo "<input type='submit' name='confirm-delete' value='Eliminar'>";
            echo "</form>";
            echo "</div>";
        } else {
            echo "No se encontraron detalles del usuario.";
        }
    }
}
?>
