<?php
session_start();

function checkLoggin($userName, $password) {
    $file = fopen("users.txt", "r");

    if ($file) {
        // Array to store username and password from each line of the file
        $lines = [];

        // Read each line from the file and store in the array
        while (($line = fgets($file)) !== false) {
            $lines[] = trim($line);
        }
        fclose($file);

        // Loop through all lines
        for ($i = 0; $i < count($lines); $i++) {
            list($stored_username, $stored_password) = explode(",", $lines[$i]);

            // Check if the username and password match
            if ($stored_username === $userName && $stored_password === $password) {
                return true;
            }
        }

        // If no match is found, return false
        return false;
    } else {
        // File couldn't be opened
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['name'];  // Match with the form's input name
    $password = $_POST['password'];

    if (checkLoggin($username, $password)) {
        $_SESSION['loggedin'] = true;  // Set session variable
        $_SESSION['username'] = $username;  // Store the username in session
       $_SESSION['message']= "Login successful! Welcome, " . $_SESSION['username'];
       header("Location: home.php"); // Redirect to home page
       exit();
    } else {
        $_SESSION['message']= "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
    padding:0;  
    margin:0;
}
body {
    background-image: url("login.jpg");
    background-attachment: fixed;
    background-attachment: no-scroll;
    height: 100%;
    background-position: center;
    background-repeat:no-repeat;
    background-size: cover;
    position: relative;
  }



.nav ul {
    display: flex;
    justify-content: space-around;
    list-style: none;
    background-color:rgb(218, 126, 20);
    width: 100%;
    height: 50px;
    text-decoration: none;
}
.nav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

li a:hover{
    background-color: #6b41ad;
}
section{
    display:flex;
    flex-direction: column;
}

section form {
    display:flex;
    flex-direction: column;
    /* justify-content: center; */
    width: 400px;
    height: 260px;
    margin: 400px; 
    margin-top: 200px; 
    margin-left: 530px; 
    background-color:rgba(198, 122, 34, 0.7);
    border-radius :7px;

    /* align-items:center ; */
}

span {
    position: absolute;
    top: 59%;
    left:33% ;
    color: white;
    font-size: 30px;
    font-family: monospace;
    background-color: brown;
    
}
h1 {
 text-align: center;
    font-family: monospace;
    color: white;
    font-size: 55px; 
}
.lbl {
    margin-left: 10px;
font-size: 25px; 
/* font-style:; */
text-align: left;
color: white;
font-family: monospace;
}
form input{
   width: 360px;
   height: 30px;
   margin-left: 10px;
}
#btn {
    width: 360px;
    display: inline-block;
    /* padding-top: px; */
    /* width: 200px; */
    margin: 10px;
    margin-top: 40px;
    font-size: 16px;
    color: white;
    background-color:red;
    /* background-color: #cd37998f ; */
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    border: none;
   
}

#btn:hover {
    background-color: rgb(45, 2, 81);
}
    </style>
</head>
<body>

<div class="nav">
        <ul>
            <li><a href="home.php">home</a></li>
            <li><a href="log_in.php">log in</a></li>
            <li><a href="sign_up.php">sign up</a></li>
            <li><a href="#">My info</a></li>
        </ul>

 </div>
 <section>
        
 <section>
    <form method="post">
        <h1>log in</h1>

        <label for="name" class="lbl">User Name :</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" required>

        <label for="password" class="lbl">Password :</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>
        <input type="submit" name="submit" value="Log in" id="btn">
        <Span class="messg"><?= isset($_SESSION['message']) ? $_SESSION['message'] : ''; ?></Span>
    </form>
</section>
    
</body>
</html>