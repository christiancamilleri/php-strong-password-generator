<?php

require './partials/function.php'

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP password generator</title>
</head>

<body>

    <h1>STRONG PASSWORD GENERATOR</h1>
    <form action="showPassword.php">

        <input name="characterNumber" type="number" min="4" max="24" method="GET">
        <input type="submit">

    </form>

    <?php

    if (isset($randomPassword)) {
        echo 'Ecco qui la tua password:' . '<h3>' . $randomPassword . '<h3>';
    } else {
        echo '<br> inserisci un numero qui sopra per ricevere la password';
    }

    ?>




</body>

</html>