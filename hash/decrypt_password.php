<?php
if (isset($_POST['password']) && isset($_POST['hashed_password'])) {
    $password = $_POST['password'];
    $hashed_password = $_POST['hashed_password'];

    if (password_verify($password, $hashed_password)) {
        echo "Mot de passe correct";
    } else {
        echo "Mot de passe incorrect";
    }
}
?>