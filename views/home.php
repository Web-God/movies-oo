<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Movies | Accueil</title>
</head>
<body>
	Moovies | <h4><a href="<?= ROOT_URL ?>" title="détails">Détails du film</a></h4>

	<?php foreach ($movies as $movie):?>
		<div class="movie">
		<a href="<?= ROOT_URL ?>/details/?id=<?= $movie['id'] ?>"><?= $movie['title'] ?></a>
		</div>
	<?php endforeach; ?>
</body>
</html>