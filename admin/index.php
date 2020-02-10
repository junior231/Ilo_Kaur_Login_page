<?php
    require_once '../load.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome! Admin</h2>
    <?php 

    // connect to db
    $conn = mysqli_connect('localhost','root','','db_login');

    // set timezone
    date_default_timezone_set("America/Toronto");
    
    // display last successful login using cookies
    setcookie('lastVisit', date("G:i - m/d/y"));
    if(isset($_COOKIE['lastVisit']))
    
    {
    $last_login = $_COOKIE['lastVisit'];
    echo "You last logged in at - ". $last_login;
    }
    ?>

</body>
</html>