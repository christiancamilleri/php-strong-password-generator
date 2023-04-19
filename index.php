<?php
// salvo in una variabile la lunghezza della password richiesta dall utente
$passwordLength = $_GET['characterNumber'];

// creo funzione che mi genera una password casuale
function getRandomPassword($num)
{
    // creo un elenco di caratteri disponibili
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789?!$%&/@*#';


    // definiamo la lunghezza dei caratteri disponibili ($characters)
    $characterslength = strlen($characters);
    // var_dump($characterslength);

    // dichiaro array password
    $password = array();

    // cicliamo x volte dove x è il numero scelto dall utente
    for ($i = 0; $i < $num; $i++) {

        // genero numero random che va da 0 al numero massimo di caratteri  
        $randomNumber = rand(0, $characterslength - 1);
        // var_dump($randomNumber);

        // inserisco caratteri nell array 
        $password[] = $characters[$randomNumber];

    }

    // trasformo l array password in una stringa
    return implode($password);

}

// password generata 
$randomPassword = getRandomPassword($passwordLength);



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
    <form action="index.php">

        <input name="characterNumber" type="number" min="4" max="24" method="GET">
        <input type="submit">

    </form>

    <?php
    echo 'Ecco qui la tua password:' . '<h3>' . $randomPassword . '<h3>';
    ?>
</body>

</html>