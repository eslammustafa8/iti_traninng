<?php
session_start();
session_cache_expire("5s");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="nav">
        <ul>
            <li><a href="#">home</a></li>
            <li><a href="log_in.php">log in</a></li>
            <li><a href="sign_up.php">sign up</a></li>
            <li><a href="#">My info</a></li>
        </ul>
    </div>
    

    <div class="center">
    <?php



if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $username = $_SESSION['username'];
  
?> <h1>Welcom <?=$username?> to my website</h1>
    <a href="logout.php" class="button">Log out</a>

<?php   
}
else {?>
<h1>Welcom broo to my website</h1>
<h2>choose any action ....!!</h2>
<div class="btn">
    <a href="log_in.php" class="button">Log In</a>
    <a href="sign_up.php" class="button">Sign Up</a>
<?php } ?>

</div>

</div>


    
</body>
</html>