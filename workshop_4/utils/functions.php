
<?php
/**
 * Summary of getConnection
 * @return bool|mysqli
 */
function getConnection(): bool|mysqli
{
    $connection = mysqli_connect('localhost:', 'root', '', 'users');
    print_r(mysqli_connect_error());
    return $connection;
}

/**
 * Get one specific student from the database
 *
 * @id Id of the student
 */
function authenticate($username, $password): bool|array|null{
  $conn = getConnection();
  $password = md5($password);
  $sql = "SELECT * FROM users WHERE `username` = '$username' AND `password` = '$password'";
  $result = $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return false;
  }
  $results = $result->fetch_array();
  $conn->close();
  return $results;
}