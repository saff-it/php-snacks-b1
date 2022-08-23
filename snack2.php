<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>

    <p>
        <?php
            $name = $_GET['name'];
            $age = $_GET['age'];
            $email = $_GET['email'];


            if (strlen($name) > 3 && (is_numeric($age)) && (strpos($email, '@') > 0 && strpos($email, '.') > 2)) {
                echo 'Accesso riuscito';
            } else {
                echo 'Accesso Negato';
            }
        ?>
    </p>

</body>

</html>