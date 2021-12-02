<?php
$Classe = [
     [
    'name' => 'Chiara',
    'lastname' => 'Papagni',
    'Voti' => [29,26,25]
     ],
     [
    'name' => 'Marco',
    'lastname' => 'Caliciotti',
    'Voti' =>[26,27,28]
     ]
    ,[
    'name' => 'Pablo',
    'lastname' => 'Valerio Silva',
    'Voti' => [28,21,24]
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack - 7</title>
</head>
<body>
    
<div>
      <?php
        for ($i=0; $i < count($Classe); $i++) { ?>
        <p>
            <?php echo $Classe[$i]['name'];?> 
            <?php echo $Classe[$i]['lastname'];?>
            <?php echo round(array_sum($Classe[$i]['Voti'])/count($Classe[$i]['Voti']));?>
        </p>
        <?php
    };?>
</div>

</body>
</html>