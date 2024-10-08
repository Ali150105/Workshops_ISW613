<?php

/**
 * Obtiene la conexión a la base de datos
 */
function getConnection(): bool|mysqli
{
    $connection = mysqli_connect('localhost', 'root', '', 'users');

    if (!$connection) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

    return $connection;
}

/**
 * Autentica a un usuario verificando sus credenciales
 */
function authenticate($username, $password): bool|array|null
{
    $conn = getConnection();
    $password = md5($password); // Encripta la contraseña para compararla

    $sql = "SELECT * FROM users WHERE `username` = ? AND `password` = ?";
    
    // Preparar declaración para evitar inyecciones SQL
    if ($stmt = $conn->prepare($sql)) {
        // Vincular parámetros
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();

        $result = $stmt->get_result();

        // Verificar si hay resultados
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
        } else {
            $user = false;
        }

        // Cerrar la declaración
        $stmt->close();
    } else {
        // Si la preparación falla, devolver falso y cerrar conexión
        $user = false;
    }

    // Cerrar la conexión
    $conn->close();

    return $user;
}

/**
 * Guarda un usuario en la base de datos
 */
function saveUser($user): bool
{
    $conn = getConnection();

    $firstName = $user['firstName'];
    $lastName = $user['lastName'];
    $username = $user['email'];
    $opcionSeleccionada = $_POST['province'];
    $password = md5($user['password']); // Encriptar contraseña

    $sql = "INSERT INTO users (name, lastname, username, province, password) VALUES (?, ?, ?, ?, ?)";

    // Usar prepared statements para evitar inyección SQL
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param('sssss', $firstName, $lastName, $username, $opcionSeleccionada, $password);
        
        // Ejecutar y verificar éxito
        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            return true;
        } else {
            $stmt->close();
            $conn->close();
            return false;
        }
    } else {
        $conn->close();
        return false;
    }
}
