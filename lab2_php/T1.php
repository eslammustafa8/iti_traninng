<?php

if (isset($_POST['result'])) {
    $string = trim($_POST['string']);
    $wordToAdd = trim($_POST['word']);
    $firstWord = trim($_POST['fword']);

    function addWord($string, $wordToAdd, $firstWord)
    {
        $strArr = explode(" ", $string);
        $pos1 = array_search($firstWord, $strArr);

        if ($pos1 !== false) {
            array_splice($strArr, $pos1 + 1, 0, $wordToAdd);
            $newString = implode(" ", $strArr);
            return $newString;
        } 
    }

    $result = addWord($string, $wordToAdd, $firstWord);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Word in String</title>

<style>
    body {
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(121,9,87,1) 49%, rgba(0,212,255,1) 100%);
    font-family: Arial, sans-serif;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

form {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
    display: flex;
    flex-direction: column;
    width: 300px;
}

form label {
    margin: 10px 0 5px;
    font-size: 16px;
    color: whitesmoke;
}

form input[type="text"] {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #00d4ff;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.2);
    color: white;
}

form input[type="submit"] {
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
    text-align: center;
    color: whitesmoke;
}


</style>
</head>

<body>

<form method="post">
    <label>Add string:</label>
    <input type="text" name="string" id="str" required>

    <label>Add a word to insert:</label>
    <input type="text" name="word" id="wrd" required>

    <label>First word:</label>
    <input type="text" name="fword" id="fword" required>

    <input type="submit" name="result" value="Add Word">
</form>

<?php
if (isset($result)) {
    echo "<h1>Result: " . $result . "</h1>";
}
?>

</body>
</html>

