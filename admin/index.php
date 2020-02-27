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

    <a href="admin_createuser.php">Add User</a><br>
    <a href="admin_logout.php">Log Out</a>
    <?php 

    // set timezone
    date_default_timezone_set("America/Toronto");
    
    // display last successful login using cookies
    setcookie('lastVisit', date("G:i - m/d/y"));
    if(isset($_COOKIE['lastVisit']))
    
    {
    $last_login = $_COOKIE['lastVisit'];
    echo "You last logged in at - ". $last_login;
    }


    // display greeting messages based on current time of the day
    $time = date("H");
    // If the time is less than 1200hrs 
    if ($time < "12") {
        echo "<br> Good morning";
    } else
    // time is more than or equal to 1200hrs and less than 1700hrs
    if ($time >= "12" && $time < "17") {
        echo "<br> Good afternoon";
    } else
    // time is more than 1700hrs
    if ($time >= "17") {
        echo "<br> Good evening";
    }
    ?>

</body>
</html>