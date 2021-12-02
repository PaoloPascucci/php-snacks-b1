<?php
/*
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
 Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

$Games = [
     [
'stadium' => 'International Milano',
    'SquadOSp' => 'Lakers',
    'SquadHome'=> 'Jaguars',
    'PsqOsp' => 35,
    'PsqHome' => 75,
     ],
    [
'stadium' => 'International Milano',
    'SquadOSp' => 'Lakers',
    'SquadHome'=> 'Jaguars',
    'PsqOsp' => 58,
    'PsqHome' => 20,
    ],
    [
'stadium' => 'International Milano',
    'SquadOSp' => 'Lakers',
    'SquadHome'=> 'Jaguars',
    'PsqOsp' => 64,
    'PsqHome' => 38,
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 1</title>
</head>
<body>
    <p>
 <?php
 for ($i=0; $i < count($Games) ; $i++) { ?>
<?php echo $Games[$i]['stadium'] ;?> 
<?php echo $Games[$i]['SquadOSp'];?> - 
<?php echo $Games[$i]['SquadHome'];?> |
<?php echo $Games[$i]['PsqOsp'];?> - 
<?php echo $Games[$i]['PsqHome'];?>
 <?php };?>
</p>
</body>
</html>