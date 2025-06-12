<?php

require 'connexion.php';

if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password'])) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $mdp = $_POST['password'];
}

$hash = password_hash($mdp, PASSWORD_DEFAULT);

if (password_verify($password, $hashed_password)) {
    header('Location: index.php?route=home');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="logic/register.php" method="POST">
        <label for="first_name">Prénom :</label><br>
        <input type="text" name="first_name"><br><br>
    
        <label for="last_name">Nom :</label><br>
        <input type="text" name="last_name"><br><br>
    
        <label for="email">Email :</label><br>
        <input type="email" name="email"><br><br>
    
        <label for="password">Mot de passe :</label><br>
        <input type="password" name="password"><br><br>
    
        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>