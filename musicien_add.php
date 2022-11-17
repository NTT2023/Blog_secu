<?php
require 'header.php';

if (!empty($_POST['name']) && !empty($_POST['login']) && !empty($_POST['password'])) {
	$db = initDatabase();
	$sql = "INSERT INTO musicien (name, login, password, url) "
		."VALUES ('".$_POST['name']."', '".$_POST['login']."', '".$_POST['password']
		."', '" . $_POST['url'] . "')";
	if ($db->query($sql)) {
		// redirection (syntaxe incorrecte, il faut normalement une URL complète)
		header('Location:login.php');
		exit();
	} else {
		die("Erreur SQLite (permission d'écriture sur le fichier et son répertoire ?) : $sql");
	}
}
	
?>
<div class="container mt-5 text-center">
<h2>Création d'un compte</h2>
<form action="" method="POST">
<div class="form-floating mb-3">

<input name="name" type="text" value="" class="form-control"/>
<label for="name">Pseudo</label>
</div>
<div class="form-floating mb-3">

<input name="url" type="text" value="" class="form-control" />
<label for="url">Site perso</label>
</div>
<div class="form-floating mb-3">

<input name="login" type="text" value="" class="form-control" />
<label for="login">Login</label>
</div>
<div class="form-floating mb-3">

<input name="password" type="text" value="" class="form-control" />
<label for="password">Mot de passe</label></div>
<div class="mb-3">
<button type="submit" class="btn btn-primary" name="ok" value="1">Créer ce compte</button></div>
</form>

</div>
<?php
require 'footer.php';
?>
