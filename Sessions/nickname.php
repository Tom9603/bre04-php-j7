<?php
session_start();

if (isset($_POST['nickname'])) {
    $pseudo = $_POST['nickname'];
}
?>