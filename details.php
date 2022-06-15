<?php
require 'functions.php';
$connection = dbConnect();

if( !isset($_GET['id']) ){
    echo "de id niet gezet";
    exit;
 }

$id = $_GET['id'];
$check_int = filter_var($id, FILTER_VALIDATE_INT);
if($check_int == false){
    echo "dit is geen getal";
    exit;
}
$statement = $connection->prepare('SELECT * FROM `merch` where id=?');
$params = [$id];
$statement->execute($params);
$product = $statement->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledetail.css">
    <title>Document</title>
</head>

<body>
    <article class="artikel">
        <h2> <?php echo $product['productnaam']?></h2>
        <img src="img/<?php echo $product['productfoto']; ?>" alt="t werkt niet">
        <h3><?php echo $product['productprijs']; ?></h3>
        <p><?php echo $product['productbeschrijving']; ?></p>
        <h4>Voorraad:<?php echo $product['voorraad']; ?></h3>
        <a href="contactpagina.php">Contact</a>
    </article>
    <!-- <p><?php echo $_GET['id'] ?></p> -->
</body>

</html>