<?php
    $array = [
        [
            'squadra di casa' => 'Inter',
            'squadra ospite' => 'Milan',
            'punteggio squadra di casa' => '4',
            'punteggio squadra ospite' => '0',
        ],
        [
            'squadra di casa' => 'Inter',
            'squadra ospite' => 'Roma',
            'punteggio squadra di casa' => '3',
            'punteggio squadra ospite' => '0',
        ],
        [
            'squadra di casa' => 'Inter',
            'squadra ospite' => 'Atalanta',
            'punteggio squadra di casa' => '1',
            'punteggio squadra ospite' => '1',
        ],
        [
            'squadra di casa' => 'Inter',
            'squadra ospite' => 'Lazio',
            'punteggio squadra di casa' => '2',
            'punteggio squadra ospite' => '1',
        ],
        [
            'squadra di casa' => 'Inter',
            'squadra ospite' => 'Sassuolo',
            'punteggio squadra di casa' => '0',
            'punteggio squadra ospite' => '2',
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>

    <?php 
        for ($i = 0; $i < count($array); $i++) {
    ?>
        <h3>
            <?php
                echo $array[$i]["squadra di casa"] . ' - ' . $array[$i]["squadra ospite"] . " | " . $array[$i]["punteggio squadra di casa"] . '-' . $array[$i]["punteggio squadra ospite"];
            ?>
        </h3>
    <?php 
        }
    ?>

</body>

</html>