<?php
require 'header.php';
?>
<div class="container mt-5 text-center">
	<h2>Liste des chansons</h2>
	<?php
	$db = initDatabase();
	$chansons = $db->query("SELECT * FROM chanson")->fetchAll(PDO::FETCH_OBJ);
	if (!empty($_SESSION['musicien'])) {
		echo "<p>Bonjour, " . $_SESSION['musicien']->name . ".</p>";
	}
	?>
	<?php
	foreach ($chansons as $chanson) { ?>
		<figure class="figure">
			<img src="/TP1_Blog/images/<?= $chanson->image ?>" class="figure-img img-fluid rounded" alt="...">
			<figcaption class="figure-caption"><a class="btn btn-info" href="chanson_view.php?id=<?= $chanson->id ?>"><?= $chanson->title ?></a></figcaption>
		</figure>
	<?php } ?>
</div>
<?php require 'footer.php'; ?>