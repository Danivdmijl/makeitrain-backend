<?php
require 'functions.php';
$connection = dbConnect();

if($_SERVER['REQUEST_METHOD'] == "POST"){
	print_r($_POST);
	exit;
}

?>

<!DOCTYPE HTML>
<html>

<head>
	<title>JDMerch ContactPagina</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="keywords" content="ContactPagina JDMerch " />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body>
	<header id="header">
		<nav>
			<ul>
				<li class="Headerknop"><a class="Headerknop" href="index.html">MakeItRain</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<form action="contact.php" method="POST">
			<div class="form__field">
				<label for="voornaam">Voornaam</label>
				<input type="text" id="voornaam" name="voornaam" placeholder="Vul uw voornaam in" required/>
			</div>
			<div class="form__field">
				<label for="achternaam">Achternaam</label>
				<input type="text" id="achternaam" name="achternaam" placeholder="Vul uw achternaam in" required/>
			</div>
			<div class="form__field">
				<label for="email">Email</label>
				<input type="email" id="email" name="email" placeholder="Vul uw email in" required/>
			</div>
			<div class="form__field">
				<label for="bericht">bericht</label>
				<textarea type="text" id="bericht" name="bericht" placeholder="Vul uw bericht in" required></textarea>
			</div>
			<button type="submit" class="form_button">Opsturen</button>
		</form>
		</section>
		</section>
</body>

</html>