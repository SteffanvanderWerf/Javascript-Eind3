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


    <?php
if (isset($verjaardag) && isset($naam) && isset($postcode) && isset($adres) && isset($stad) && isset($nationaliteit) && isset($beroep)) {
    echo "According to the form you filled in your name is " . $naam . ". <br>you were born on " . $verjaardag . " so your age is " . calcAge($verjaardag) . " years old. <br> You are from " . $stad . " and your address is " . $adres . " and your postal code is " . $postcode . "<br>You also filled in that your nationality " . $nationaliteit . " is. <br> and your job is " . $beroep . ".";
}

?>
<br><br>
<a  class="php" href="index.html">Return</a>

</p>


</body>
</html>

