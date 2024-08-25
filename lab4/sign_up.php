<?php
if(isset($_POST["submit"]))
{
    $myfile = fopen("users.txt", "a") or die("Unable to open file!");

    $info = $_POST["name"].",".$_POST["password"]."\n";

    fwrite($myfile, $info);

    fclose($myfile);
    header("Location:log_in.php"); // Redirect to home page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
    padding:0;  
    margin:0;
}
body {
    background-image: url("log_in.jpg");
    background-attachment: fixed;
    background-attachment: scroll;
    height: 700px;
    background-position: center;
    background-repeat:no-repeat;
    background-size: cover;
    position: relative;
  }



.nav ul {
    display: flex;
    justify-content: space-around;
    list-style: none;
    background-color:#AD49E1;
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


section form {
    display:flex;
    flex-direction: column;
    /* justify-content: center; */
    width: 400px;
    height: 400px;
    margin: 400px; 
    margin-top: 200px; 
    margin-left: 530px; 
    background-color: #cd37998f ;
    border-radius :7px;

    /* align-items:center ; */
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
    background-color: rgb(212, 16, 237);
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
        
     <form method="post">
        <h1>
           sign up
        </h1>
        <label for="name" class="lbl">Name :</label>
        <input type="text" name="name" id="name" placeholder="Enter ur name" >
        <label for="email" class="lbl">Email :</label>
        <input type="text" name="email" id="email" placeholder="Enter ur email" >
        <label for="password" class="lbl">password :</label>
        <input type="password" name="password" id="password" placeholder="Enter ur password" >
        <label for="phone" class="lbl">phone Num :</label>
        <input type="text" name="phone" id="phone" placeholder="Enter ur phone" >

        <input type="submit" name="submit" value="regiester" id="btn">
       </form>

     </section>



    
</body>
</html>