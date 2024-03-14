<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action = "index.php" method = "post">
        <input type = "text" name = "firstName" placeholder = "First name">
        <input type = "text" name = "surname" placeholder = "Surname">
        <input type = "number" name = "age" placeholder = "Age">
        <input type = "submit" name = "submit">
    </form>
</body>
</html>

<?php
    if(empty($_POST)){
        exit;
    }

    $firstName = $_POST["firstName"];
    $surname = $_POST["surname"];
    $age = $_POST["age"];

    if($age < 18) {
        echo "You must be 18+ to view this website";
    } else{
        echo "Welcome {$firstName} {$surname}, you are {$age} years old and may view this website.";
    }
?>