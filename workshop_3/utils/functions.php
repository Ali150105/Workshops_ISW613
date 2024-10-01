<?php

/**
 *  Gets the provinces from the database
 */
function getProvinces(): array {
 $conn = getConnection();
  $sql = "SELECT id, name FROM provinces";
  $result = mysqli_query($conn, $sql);
  
  $provinces = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $provinces[$row['id']] = $row['name'];
  }
  return $provinces;
}


function getConnection(): bool|mysqli {
  $connection = mysqli_connect('localhost:3306', 'root', '', 'php_web2');
  print_r(mysqli_connect_error());
  return $connection;
}

/**
 * Saves an specific user into the database
 */
function saveUser($user): bool{
  $firstName = $user['firstName'];
  $lastName = $user['lastName'];
  $email = $user['email'];
  $password = md5($user['password']);
  $province_id = $user['province_id'];  // Provincia

  $sql = "INSERT INTO users (firstName, lastName, email, password, province_id) 
          VALUES('$firstName', '$lastName', '$email','$password', '$province_id')";

  try {
    $conn = getConnection();
    mysqli_query($conn, $sql);
  } catch (Exception $e) {
    echo $e->getMessage();
    return false;
  }
  return true;
}
