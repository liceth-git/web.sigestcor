<?php
include_once "controladores/conexion.php";
$query = "SELECT persona.*, telefono.telefono, correo.email, rol.Descripcion 
          FROM persona
          LEFT JOIN telefono ON persona.documento = telefono.documento
          LEFT JOIN correo ON persona.documento = correo.documento
          LEFT JOIN rol ON persona.idRol = rol.idRol";
$result = $conn->query($query); 
if ($result) {
    echo "<table border='1'>";
    echo "<tr><th>Documento</th><th>Tipo de Documento</th><th>Primer Nombre</th><th>Segundo Nombre</th><th>Primer Apellido</th><th>Segundo Apellido</th><th>Teléfono</th><th>Correo Electrónico</th><th>Rol</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["documento"] . "</td>";
        echo "<td>" . $row["tipoDocumento"] . "</td>";
        echo "<td>" . $row["Pnombre"] . "</td>";
        echo "<td>" . $row["Snombre"] . "</td>";
        echo "<td>" . $row["Papellido"] . "</td>";
        echo "<td>" . $row["Sapellido"] . "</td>";
        echo "<td>" . $row["telefono"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["Descripcion"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else {
    echo "Error en la consulta";
}

?>
