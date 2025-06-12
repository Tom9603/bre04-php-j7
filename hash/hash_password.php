<?php

if (isset($_POST['password'])) {
    $mdp = $_POST['password'];
}

$hash = password_hash($mdp, PASSWORD_DEFAULT);

echo $hash;
?>