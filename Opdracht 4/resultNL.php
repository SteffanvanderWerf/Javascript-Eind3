<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm vak</title>
</head>
<body id="body-php">

<?php

include "funtieage.php";

$verjaardag = $_POST['verjaardag'];
$naam = $_POST['namen'];
$postcode = $_POST['postcode'];
$adres = $_POST['adres'];
$stad = $_POST['stad'];
$nationaliteit = $_POST['nationaliteit'];
$beroep = $_POST['beroep'];
?>
<!-- <br>
<br>
<br>
<br>
<br>
<br>
<br> -->


    <?php
if (isset($verjaardag) && isset($naam) && isset($postcode) && isset($adres) && isset($stad) && isset($nationaliteit) && isset($beroep)) {
    echo "Volgens het formulier dat u heeft ingevuld heet u " . $naam . ". <br>U bent geboren op " . $verjaardag . " dan bent u " . calcAge($verjaardag) . " jaar oud. <br> U komt uit " . $stad . " op het adres " . $adres . " en op de postcode " . $postcode . "<br>ook heeft u ingevuld dat u nationaliteit " . $nationaliteit . " is. <br>U beroep is " . $beroep . ".\n <br> <br>";
}

?>

<a class= "php" href="index.html">terug</a>

<!-- </center> -->




</body>
</html>
