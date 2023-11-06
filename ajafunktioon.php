<!DOCTYPE html><!--HTML decloratioon-->
<!--komentaar-->
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Egor veebirakenduste leht</title>
    <link rel="stylesheet" type="text/css" href="stile/stile.css">
</head>
<!--a -->
<body>
<?php include('navigatsioon.php')?>
<div id="eesti_kuud">
    <h2>Kuu eesti sõnadega</h2>
    <?php
    $paev = date('d');
    $kuu = date('m');
    $aasta = date('Y');

    echo "Eestis täna on: " . $paev . "." . $kuu . "." . $aasta . "a";
    $eesti_kuud = array(1 => 'Jaanuar', 'Veebruar', 'Märts', 'Aprill', 'Mai', 'Juuni', 'Juuli', 'August', 'September', 'Oktoobber', 'November', 'Detsember');
    $kuu_sonadega = $eesti_kuud[date('n')];
    echo "<br>";
    echo "Eestis täna on: " . $paev . "." . $kuu_sonadega . "." . $aasta . "a";

    ?>
</div>
<div id="timezone">
    <h2>date_default_timezone()</h2>
    <?php
    date_default_timezone_set('Australia/Sydney');
    echo date_default_timezone_get();
    echo date('l d.m.Y G:i', time());
    ?>
</div>
</body>