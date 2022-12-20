<?php

session_start();
$_SESSION = array();
session_destroy();
header("location: ../index.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
    <title>Logout!</title>
</head>
<body>
    
</body>
</html>
