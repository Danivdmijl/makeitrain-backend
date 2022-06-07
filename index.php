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
            <h2><?php echo $row['productnaam']; ?></h2>
            <img src="img/<?php echo $row['productfoto']; ?>" alt="t werkt niet">
            <p><?php echo $row['productbeschrijving']; ?></p>
            <h3><?php echo $row['productprijs']; ?></h3>
            <h4>Voorraad:<?php echo $row['voorraad']; ?></h3>
            <a href="details.php?id=<?php echo $row['id']; ?>">Meer info</a>
        </article>
    <?php endforeach; ?>

</body>
</html>


