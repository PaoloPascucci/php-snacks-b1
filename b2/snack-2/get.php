<?php

/*
Creiamo due pagine php. La prima farà una chiamata GET alla seconda attraverso un form.
Il form avrà un input di testo in cui inserire il nome di un invitato.
Inseriamo nell’altro file una lista di invitati. Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko.
*/

$Invitati=[
    'name' => 'Giorgio',
    'name' => 'Pablo',
    'name' => 'Alejandro',
    'name' => 'Valerio',
    'name' => 'Peter',
];
$name=$_GET['name'];
if (in_array($name, $Invitati)) {
    $risposta = "<h1>ok</h1>";
}else{
    $risposta = "<h1>ko</h1>";
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get snack 2</title>
</head>
<body>
    <?= $risposta; ?>
</body>
</html>