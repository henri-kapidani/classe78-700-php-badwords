<?php
/*
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite un form con metodo GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/
?>

<?php
	$word = isset($_GET['word']) ? $_GET['word'] : '';

	$censor = '<span class="censored">***</span>';

	$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, deleniti vitae. Velit autem recusandae, laboriosam commodi blanditiis aliquid consequuntur nemo unde esse. Voluptatum suscipit quis voluptates necessitatibus neque officiis exercitationem.
	Aliquid nisi accusantium repudiandae asperiores. Laboriosam earum debitis, consequatur veniam beatae asperiores a aliquam qui numquam, odit at eum quos, iste cum rem explicabo commodi sed suscipit. Odio, voluptate consequatur?
	Qui nihil dolor consequuntur voluptas sequi cumque omnis vitae illum incidunt dignissimos hic corporis, quia minus ab vel exercitationem porro delectus debitis nulla nisi quidem. Saepe accusantium est debitis. Consequatur!
	Eaque aspernatur reiciendis facilis recusandae ex iusto labore soluta nostrum sapiente, nam quis ab atque provident modi dolore accusantium odio quam? Quaerat enim aut dolorem corrupti non esse ea. Magni?
	Aperiam autem expedita porro accusantium! Rerum beatae explicabo asperiores odit dolorum porro nostrum est ex amet doloribus, debitis earum animi inventore. Voluptatibus illum dolor consectetur aperiam nam quam soluta similique!
	Corrupti a expedita quas laboriosam reiciendis? Temporibus, inventore quae voluptate maxime dolor assumenda eos nihil reprehenderit iusto minima necessitatibus non alias distinctio porro similique dolorem dignissimos voluptates, eveniet laboriosam illum?
	Blanditiis impedit aliquam soluta. Itaque exercitationem unde, nihil tenetur nulla corrupti quisquam dignissimos pariatur amet iusto impedit mollitia in incidunt ullam laboriosam quasi ipsa quibusdam, fugiat dolores. Beatae, sint amet.
	Voluptatum perferendis ipsam, iure quasi rerum magni fuga, nam saepe voluptates, laborum mollitia harum consectetur officia totam? Similique esse expedita culpa eaque, molestias repellendus, reiciendis vel, aliquid dolor quam laborum.
	Ea, ut iusto. Ratione dolorum ipsum possimus repellendus ipsa? Necessitatibus quis nostrum voluptas accusamus praesentium, sed illo quidem expedita dolor laboriosam. Fugiat modi, error hic quas suscipit officiis quis perspiciatis.
	Eius odit quod animi eaque ab, culpa provident et deserunt libero illum veritatis amet repellat! Consequatur iusto mollitia nam consectetur, maxime reiciendis cumque, ratione, quis tempore est dolore corrupti necessitatibus?';

	$text_censored = str_ireplace($word, $censor, $text, $substitutions);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>Censuratore</h1>

	<form action="" method="get">
		<label for="word-id">Parola da censurare</label>
		<input type="text" name="word" id="word-id" value="<?= $word; ?>">
		<button>Censura</button>
	</form>

	<h2>Paragrafo originale</h2>
	<?= $text; ?>

	<h2>Caratteri paragrafo originale: <?= strlen($text); ?></h2>

	<h2>Paragrafo censurato</h2>
	<?= $text_censored; ?>

	<h2>Caratteri paragrafo censurato: <?= strlen($text_censored); ?></h2>
	<h2>Parole censurate: <?= $substitutions ?></h2>
</body>
</html>