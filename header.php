<?php
session_start();
require_once "lib/common.php";
//noMagicQuotes();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sécurité - chanson</title>
    <!-- <link rel="stylesheet" href="style/style.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="p-5 bg-primary text-white text-center">
        <h1>Ma playlist</h1>
    </div>


    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="/TP1_Blog/images/Greta.jpg" alt="Logo" style="width:80px; margin-left:10px" > <?php
                                                                        if (isset($_SESSION['musicien']->name)) echo "Connecté : " . $_SESSION['musicien']->name;
                                                                        else echo "Non connecté";
                                                                        ?>
        </a>
        <div class="container-fluid justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="musicien_add.php">Créer un compte</a></li>
                <?php if (isset($_SESSION['musicien']->name)) echo "
  <li class=\"nav-item\"><a class=\"nav-link\" href=\"/TP1_Blog/logout.php\">Se déconnecter</a></li>";
                else echo "
  <li class=\"nav-item\"><a class=\"nav-link\" href=\"/TP1_Blog/login.php\">Se connecter</a></li>";
                ?>
            </ul>
        </div>
    </nav>