<?php
/*
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/
// var_dump($_GET)
$name=$_GET['name'];
$email=$_GET['email']:
$age=$_GET['age'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body>
    <?php
    // if (strlen($name) >= 3){
    //     if( str_contains($email, '@') && str_contains($email, '.')) {
    //         if($age ){}
    // }
    //     echo 'Accesso riuscito';
    // }
    // else{
    //     echo 'Accesso Negato';
    // }; ?>
    <form action="" method="get">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <label for="age">Età</label>
        <input type="number" name="age" id="age">
    </form>

</body>
</html>