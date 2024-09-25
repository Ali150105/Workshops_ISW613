<?php
  $name = @$_REQUEST['name'];
  $lastname = @$_REQUEST['lastname'];
  $phonenumber = @$_REQUEST['phonenumber'];
  $email = @$_REQUEST['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Print Name</title>
</head>
<body>
<form action="/workshop_2/save.php" method="POST">
  <div class="form-group">
    <label for="">Nombre</label>
    <input type="text" class="form-control" name="name" id="" value="<?php echo $name; ?>"  placeholder="Your name">
    <label for="">Last Name</label>
    <input type="text" class="form-control" name="lastname" id="" value="<?php echo $name; ?>"  placeholder="Your last name">
    <label for="">Phone Number</label>
    <input type="text" class="form-control" name="phonenumber" id="" value="<?php echo $phonenumber; ?>"  placeholder="Your phone number">
    <label for="">Email</label>
    <input type="text" class="form-control" name="email" id="" value="<?php echo $email; ?>"  placeholder="Your email">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
