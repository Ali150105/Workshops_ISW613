<?php
include('functions.php');

$conn = getConnection();
$sql = "SELECT users.id, users.firstName, users.lastName, users.email, provinces.name as province 
        FROM users 
        JOIN provinces ON users.province_id = provinces.id";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1 class="my-4">Users List</h1>
    <!-- Botón para regresar al formulario de signup -->
    <a href="../" class="btn btn-secondary mb-3">Regresar formulario</a>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Province</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['firstName'] ?></td>
          <td><?= $row['lastName'] ?></td>
          <td><?= $row['email'] ?></td>
          <td><?= $row['province'] ?></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</body>

</html>