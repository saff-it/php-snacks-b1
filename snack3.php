<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    
<p>
    <?php 

        $randomNumbers = [];

        while (count($randomNumbers) < 15) {
            $randomNum = rand(1, 100);

            if (!in_array($randomNum, $randomNumbers)) {
                $randomNumbers[] = $randomNum;
            }

        }
        
        var_dump($randomNumbers);
    ?>
</p>

</body>
</html>