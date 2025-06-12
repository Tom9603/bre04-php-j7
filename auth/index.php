<?php
session_start();

if (isset($_GET['route'])) {
    $route = $_GET['route'];
} else {
    $route = NULL;
}

require 'connexion.php';
require 'layout.phtml';
?>