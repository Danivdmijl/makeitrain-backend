<?php
require 'functions.php';
$connection = dbConnect();

$result = $connection->query('SELECT * FROM `merch`');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <?php foreach ($result as $row) : ?>
        <article class="art">
            <h2>Mok</h2>
            <img src="img/mok.webp" alt="">
            <p>De mok is mooi en leuk om uit te drinken</p>
            <h3>30,-</h3>
            <h4>Voorraad: 2</h3>
        </article>
    <?php endforeach; ?>

</body>

</html>