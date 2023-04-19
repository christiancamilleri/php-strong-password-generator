<?php
include './partials/function.php';
getRandomPassword($_GET['characterNumber']);
// generatePasswordRandom();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Password generata:
        <?php echo $_SESSION['password'] ?>
    </h1>

    <a href="index.php">Genera una nuova password</a>
</body>

</html>