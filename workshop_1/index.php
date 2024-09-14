<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Current Date and Time</title>
</head>
<body>
    <h1>Current Date and Time</h1>
    <?php
    // Set the default timezone to your desired timezone
    date_default_timezone_set('America/New_York');
    
    // Get current date and time
    $currentDateTime = date('Y-m-d H:i:s');
    
    // Print the current date and time
    echo "<p>Current Date and Time: $currentDateTime</p>";
    ?>
</body>
</html>
