<?php 
$session_id = explode("=", $_GET['cookies']);
//enregistrement dans ma bd
// ici en exemple
echo "Merci pour votre id de session : ".print_r($session_id).", Je vais en faire bon usage...
<meta http-equiv='Refresh' content='10;URL=index.php'>";  
?>
<a href="pirate.html">lien pirate</a>
<html lang="fr"><head>
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
            <img src="images/Greta.jpg" alt="Logo" style="width:80px;"> Connecté en tant que : MrShadow945        </a>
        <div class="container-fluid justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="musicien_add.php">Créer un compte</a></li>
  <li class="nav-item"><a class="nav-link" href="logout.php">Se déconnecter</a></li>                <li class="nav-item">
                    Connecté en tant que : PIRATE                </li>
            </ul>
        </div>
    </nav><div class="container mt-5 text-center">
<h2>Liste des chansons</h2>

<p>Bonjour, MrShadow945.</p>
	<figure class="figure">
  <img src="images/pochette-ani-kuni-polo-pan.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption"><a class="btn btn-info" href="chanson_view.php?id=1">Ani Kuni</a></figcaption>
</figure>
			<figure class="figure">
  <img src="images/pochette-arcade-duncan-laurence-fletcher.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption"><a class="btn btn-info" href="chanson_view.php?id=2">Arcade</a></figcaption>
</figure>
			<figure class="figure">
  <img src="images/pochette-bad-habits-ed-sheeran.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption"><a class="btn btn-info" href="chanson_view.php?id=3">Bad Habits</a></figcaption>
</figure>
			<figure class="figure">
  <img src="images/pochette-cold-heart-elton-john-dua-lipa.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption"><a class="btn btn-info" href="chanson_view.php?id=4">Cold Heart</a></figcaption>
</figure>
			<figure class="figure">
  <img src="images/pochette-combien-dairs-lilian-renaud.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption"><a class="btn btn-info" href="chanson_view.php?id=5">Combien D'airs</a></figcaption>
</figure>
			<figure class="figure">
  <img src="images/pochette-easy-on-me-adele.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption"><a class="btn btn-info" href="chanson_view.php?id=6">Easy On Me</a></figcaption>
</figure>
			<figure class="figure">
  <img src="images/pochette-stay-the-kid-laroi-justin-bieber.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption"><a class="btn btn-info" href="chanson_view.php?id=7">Stay</a></figcaption>
</figure>
			<figure class="figure">
  <img src="images/pochette-nos-plus-belles-annees-grand-corps-malade-kimberose.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption"><a class="btn btn-info" href="chanson_view.php?id=8">Nos Plus Belles Annees</a></figcaption>
</figure>
			<figure class="figure">
  <img src="images/pochette-xy-vitaa-slimane.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption"><a class="btn btn-info" href="chanson_view.php?id=9">XY</a></figcaption>
</figure>
			<figure class="figure">
  <img src="images/pochette-sante-stromae.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption"><a class="btn btn-info" href="chanson_view.php?id=10">Sante</a></figcaption>
</figure>
		</div>
<br><br>
<div class="bg-dark text-white text-center">
    <em>© BTS SIO</em>
</div>
</body></html>