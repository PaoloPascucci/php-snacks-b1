<?php
/*
Creare un array con 15 numeri casuali,
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

 $numbers = [];
 for ($i=0; $i < 15; $i++) { 
$rnum = rand(1, 100);
array_push($numbers, $rnum);
$result = array_unique($numbers);
 };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    <div>
    <?php print_r($result); ?>
    </div>
</body>
</html>