<?php
	require 'header.php';
?>
<div class="container mt-5 text-center">
	<?php
	if (empty($_GET['id'])) {
		// redirection (syntaxe incorrecte, il faut normalement une URL complète)
		header('Location: index.php');
		exit();
	}
	
	$db = initDatabase();
	$chansons = $db->query("SELECT * FROM chanson WHERE id=" . $_GET['id'])
		->fetchAll(PDO::FETCH_OBJ);
	$chanson = $chansons[0];
	$chanson->comments = $db->query("SELECT c.*, u.name, u.url "
		. "FROM comment c JOIN musicien u ON c.id_musicien=u.id"
		. " WHERE id_chanson=" . $_GET['id'])
		->fetchAll(PDO::FETCH_OBJ);
 
	echo '<div id="chanson" class="btn btn-success">'
		. '<h2>' . $chanson->auteur. '</h2>'
		.'<img src="images/'.$chanson->image.'" class="figure-img img-fluid rounded" alt="...">'
		. '<h2>' . $chanson->title . '</h2>'
		. '<div id="content">' . $chanson->content . '</div>';
		echo "</div>";

	echo '<br><br>';
	if (empty($chanson->comments)) {
		echo '<p>Aucun commentaire</p>';
	} else {
		echo '<ul class="list-group-flush">';
		foreach ($chanson->comments as $comment) {
			echo '<li class="list-group-item"><b>'
				. $comment->title
				. ' : </b>  <em>' . $comment->content
				.  "</em><div>Par : <a href=\"$comment->url\" target=\"_blank\" class=\"btn btn-warning\">$comment->name</a></div>"
				. (isset($_SESSION['musicien']->id) && $comment->id_musicien == $_SESSION['musicien']->id ?
					' <a href="comment_create.php?id_chanson=' . $comment->id_chanson
					. '&amp;id_comment=' . $comment->id . '" title="' . $comment->title
					. '">Modifier ce commentaire</a>' :
					'')
				. "</li>";
		}
		echo "</ul>";
	}

	

	if (empty($_SESSION['musicien'])) {
		echo '<p>Il faut être identifié pour poster un commentaire.</p>';
	} else {
		if ($chanson->closed) {
			echo "<p>Chanson fermée, non modifiable.</p>";
		} else {
			echo '<p> <a href="comment_create.php?id_chanson=' . $chanson->id
				. '">Ajouter un commentaire</a> avec votre compte : ' . $_SESSION['musicien']->name
				. ' </p>';
		}
	}
	?>

	</div>

	<?php
require 'footer.php';
?>