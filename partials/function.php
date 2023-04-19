<?php
session_start();

if (isset($_GET['characterNumber'])) {
    // salvo in una variabile la lunghezza della password richiesta dall utente
    $passwordLength = $_GET['characterNumber'];
}




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

    $newPassword = implode($password);

    $_SESSION['password'] = $newPassword;

    // trasformo l array password in una stringa
    return $newPassword;

}



if (isset($passwordLength)) {
    // password generata 
    $randomPassword = getRandomPassword($passwordLength);



}


?>