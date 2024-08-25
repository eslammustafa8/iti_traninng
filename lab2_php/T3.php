<?php
if (isset($_POST['submit'])) {
    $str = $_POST['string'];

    // Function to remove commas from the string
    function removeCommas($str) {
        return str_replace(",", "", $str);
    }

    $result = removeCommas($str);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Commas from Numeric String</title>
    <style>
        body {
            
            font-family: Arial, sans-serif;
            color: white;
            height: 100vh;
            display: flex;
            background: rgb(34,193,195);
background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(76,45,253,1) 90%);
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        div {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        form label {
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
            color: #ffebcd;
        }

        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            font-size: 16px;
        }

        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #0280d2;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #00d4ff;
        }

        h1 {
            margin-top: 20px;
            font-size: 24px;
            color: #ffebcd;
        }
    </style>
</head>
<body>

<div>
    <form method="post">
        <label>Enter a numeric string with commas:</label>
        <input type="text" name="string" id="str" required>
        <input type="submit" name="submit" value="Remove Commas">
    </form>

    <?php
    // Display the result if set
    if (isset($result)) {
        echo "<h1>Result: " . htmlspecialchars($result) . "</h1>";
    }
    ?>
</div>

</body>
</html>
