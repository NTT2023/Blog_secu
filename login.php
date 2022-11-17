<?php
require 'header.php';

if (!empty($_REQUEST['login']) && !empty($_REQUEST['password'])) {
	$db = initDatabase();
	$sql = "SELECT * FROM musicien "
		. "WHERE login='" . $_POST['login'] . "' AND password='" . $_POST['password'] . "'";
	echo $sql;
	$musiciens = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
	if (!empty($musiciens)) {
		$_SESSION['musicien'] = $musiciens[0];
		// redirection (syntaxe incorrecte, il faut normalement une URL complète)
		header('Location:index.php');
		exit();
	}
}
?>
<div class="container mt-5 text-center">
	<h2>Authentification</h2>
	<form action="" method="POST">
		<div class="form-floating mb-3">
			
			<input name="login" type="text" value="<?php if (isset($_REQUEST['login'])) {
																					echo $_REQUEST['login'];
																				} ?>" class="form-control" />
			<label for="login" class="form-label">Login</label></div>
		<div class="form-floating mb-3">
		
		<input name="password" type="text" value="" class="form-control" />
		<label for="password">Mot de passe</label>
	</div>
		
		
		<div class="mb-3 mt-3"><button class="btn btn-primary" type="submit" name="ok" value="1">S'authentifier</button></div>
	</form>

</div>
<?php
require 'footer.php';
?>