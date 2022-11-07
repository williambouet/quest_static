<?php
include_once 'Speedometer.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speedometer</title>
</head>

<body>

    <h1>Convertisseur Km en Miles / Miles en Km</h1>
    <h2>Km en Miles</h2>
    <?= Speedometer::convertKmToMiles(10); ?> miles


    <h2>Miles en Km</h2>
    <?= Speedometer::convertMilesToKm(100); ?> km

</body>

</html>