<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>

<body>

    <?php
        $classroom = [
            [
                'Nome' => 'Simone',
                'Cognome' => 'Saffiotti',
                'Voti' => [   
                        "Matematica" => '8',
                        "Storia" => '7',
                        "Latino" => '9',
                        "informatica" => '10',
                    ],
            ],
            [
                'Nome' => 'Mario',
                'Cognome' => 'Rossi',
                'Voti' => [   
                        "Matematica" => '4',
                        "Storia" => '7',
                        "Latino" => '2',
                        "informatica" => '9',
                    ],
            ],
            [
                'Nome' => 'Maria',
                'Cognome' => 'Bianchi',
                'Voti' => [   
                        "Matematica" => '7',
                        "Storia" => '3',
                        "Latino" => '9',
                        "informatica" => '1',
                    ],
            ],
            [
                'Nome' => 'Paolo',
                'Cognome' => 'Paoli',
                'Voti' => [   
                        "Matematica" => '10',
                        "Storia" => '10',
                        "Latino" => '2',
                        "informatica" => '4',
                    ],
            ],
            
        ];

        // var_dump($classroom);

        for ($i = 0; $i < count($classroom); $i++) {
    ?>

        <h3>
            <?php
                $mediaVoti = $classroom[$i]['Voti']['Matematica'];
                echo $classroom[$i]['Nome'] . ' ' . $classroom[$i]['Cognome'] . ': Media = ' . $mediaVoti;
            ?>
        </h3>

    <?php 
        }
    ?>


</body>

</html>