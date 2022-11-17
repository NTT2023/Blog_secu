<?php
	require 'header.php';

	$db = initDatabase();

	if (empty($_REQUEST['id_chanson'])) {
		// redirection (syntaxe incorrecte, il faut normalement une URL complète)
		header('Location: index.php');
		exit();
	}
	
	if (!empty($_GET['title']) && !empty($_GET['content'])) {
		$title = $_GET['title'];
		$content = $_GET['content'];
	

if (empty($_GET['id_comment'])) { // nouveau ou modif ?
        $sql = "INSERT INTO comment (id_chanson, title, content, id_musicien) "
            ."VALUES (".$_GET['id_chanson'].", \"".$title."\", \"".$content."\", ".$_SESSION['musicien']->id.")";
    } else {
        $sql = "UPDATE comment SET title=\"".$title."\", content=\"".$content."\", id_musicien=". $_SESSION['musicien']->id
            ." WHERE id = " . $_GET['id_comment'];
    }

		if ($db->query($sql)) {
			// redirection (syntaxe incorrecte, il faut normalement une URL complète) 
			header('Location: chanson_view.php?id=' . $_GET['id_chanson']);
			exit();
		} else {
			die("Erreur SQL : $sql");
		}
	}
	?>

<div class="container mt-5 text-center">
  <h2>Ajouter/modifier un commentaire</h2>
  <form action="" method="get">
    <fieldset>
      <?php if (!empty($_REQUEST['id_comment'])) {
				echo '
				<div class="form-floating mb-3">
				<input name="id_comment" type="hidden" value="' . $_REQUEST['id_comment'] . "\" />
				</div>";
			} ?>
      <input name="id_chanson" type="hidden" value="<?php echo $_REQUEST['id_chanson']; ?>" />
      <br />
      <div class="form-floating mb-3">
        <input name="title" type="text" value="" size="60"  class="form-control"/>
        <label for="login">Titre</label>
      </div>
      <div class="form-floating mb-3">
        <textarea name="content" cols="60" rows="6"  class="form-control"></textarea>
        <label for="login">Texte</label>
      </div>
      <button type="submit" class="btn btn-primary" name="ok" value="1">Ajouter ce commentaire</button>
    </fieldset>
  </form>
</div>
<?php
require 'footer.php';
?>