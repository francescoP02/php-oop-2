<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali. :catrainbow: :cool-doge:
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti. :carello_della_spesa:
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->

<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~ E_NOTICE);

require_once __DIR__ . "/AnimalToy.php";
require_once __DIR__ . "/AnimalFood.php";

$catfood = new AnimalFood("Conad", "Miaomiao", 4, "Crocchette per gatti", 100, "1 anno");
var_dump($catfood);

$dogfood = new AnimalFood("Royal Canin", "Gastrointestinal", 40, "Crocchette per cani", 1000, "4 anni");
var_dump($dogfood);

$plastic_bone = new AnimalToy("Joe's Zampetti", "Osso di plastica", "10", "Osso di plastica per cani", "2 anni");
var_dump($plastic_bone);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>
<body>

<ul>
    <li><?php echo $catfood->printInfo() ?></li>
    <li><?php echo $dogfood->printInfo() ?></li>
    <li><?php echo $plastic_bone->printInfo() ?></li>
</ul>
    
</body>
</html>