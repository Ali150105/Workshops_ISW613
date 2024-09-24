<?php
echo("The Name is ". $_POST['name']. "<br>");
echo("The Last Name is ". $_POST['lastname']. "<br>");
echo("The phone Number is ". $_POST['phonenumber'] . "<br>");
echo("The email is ". $_POST['email'] . "<br>");
?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "workshop_2";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa<br>";

$sql = "INSERT INTO usuarios (name, lastname, phonenumber, email)
        VALUES ('" . $_POST['name'] . "', '" . $_POST['lastname'] . "', '" . $_POST['phonenumber'] . "', '" . $_POST['email'] . "')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

$conn->close();


?>