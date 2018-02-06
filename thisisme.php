<?php
$voornaam = "Bas";
$achternaam = "Heijink";
$adres = "Schierbeekstraat";
$huisnnummer = "14";
$plaats = "Boekelo";
$leeftijd = "16";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>thisisme</title>
</head>
<body>
    <img src="https://assets.rbl.ms/5879376/980x.jpg" width="100px">
    <h1><?php
        echo "Naam: ".$voornaam ." ". $achternaam;
        ?></h1>
    <h2>
        <?php
        echo "Adres:". $adres . " ". $huisnnummer." ". $plaats;
        ?>
    </h2>
    <h3>
        <?php
        echo"Leeftijd:". $leeftijd;
        ?>
    </h3>

</body>
</html>
