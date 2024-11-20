<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?? 'Dashboard' ?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" id="navId">
    <li class="nav-item">
      <a href="<?php echo site_url('/signup');?>" class="nav-link active">Signup</a>
    </li>
    <li class="nav-item">
      <a href="/" class="nav-link active">Login</a>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link active">Logout</a>
    </li>

    <li class="nav-item">
      <a href="" class="nav-link">Users</a>
    </li>
    <li>
      <?php if (isset($user)) : ?>
        <?php echo $user['name'] ?? ''; ?>
        <img width="40" src="<?php echo "/uploads/".$user['profile_picture'] ?? ''?>">
      <?php endif; ?>
    </li>
  </ul>
