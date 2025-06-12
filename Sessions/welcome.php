<?php

require 'nickname.php';

if (isset($_SESSION['pseudo'])) {
    echo "Bienvenue " . $pseudo;
} else {
    echo "Bienvenue invité";
};
?>