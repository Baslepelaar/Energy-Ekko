<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php

    $host ="localhost";
    $user = "root";
    $pass = "";
    $database = "energy";

    $conn = new mysqli($host, $user, $pass, $database);

    if($conn->connect_error){
        echo $conn->error;

    }

    ?>
</body>
</html>