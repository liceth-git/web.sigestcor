<?php

include_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $tipoDocumento = isset($_POST["tipoDocumento"]) ? $_POST["tipoDocumento"] : "";
    $numeroDocumento = isset($_POST["documento"]) ? $_POST["documento"] : "";
    $primerNombre = isset($_POST["primerNombre"]) ? $_POST["primerNombre"] : "";
    $segundoNombre = isset($_POST["segundoNombre"]) ? $_POST["segundoNombre"] : "";
    $primerApellido = isset($_POST["primerApellido"]) ? $_POST["primerApellido"] : "";
    $segundoApellido = isset($_POST["segundoApellido"]) ? $_POST["segundoApellido"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : "";

    // Define el estado como "pre_registro"
    $estado = "pre_registro";

    // Inicia una transacción 
    $conn->begin_transaction();

    $sqlp = "INSERT INTO persona (documento, tipoDocumento, Pnombre, Snombre, Papellido, Sapellido, pre_registro) 
    VALUES ('$numeroDocumento', '$tipoDocumento', '$primerNombre', '$segundoNombre', '$primerApellido', '$segundoApellido', 1)";

    $sqlc = "INSERT INTO correo (documento, email) VALUES ('$numeroDocumento', '$email')";


    $sqlt = "INSERT INTO telefono (documento, telefono) VALUES ('$numeroDocumento', '$telefono')";


    if ($conn->query($sqlp) === TRUE && $conn->query($sqlc) === TRUE && $conn->query($sqlt) === TRUE) {

        $conn->commit();
        echo "Pre registro exitoso";
    } else {

        $conn->rollback();
        echo "Error al registrar pre registro: " . $conn->error;
    }


    $conn->close();
} else {

    echo "El formulario no se ha enviado.";
}
?>



