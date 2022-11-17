<?php
// On démarre la session
session_start();
if (isset($_SESSION['musicien'])) {

    // Supression des variables de session et de la session
    $_SESSION = array();
    session_destroy();
    header('Location: index.php');
} else { // Dans le cas contraire on t'empêche d'accéder à cette page en te redirigeant vers la page que tu veux.

    header('Location: index.php');
}
