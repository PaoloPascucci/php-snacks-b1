<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack - 6</title>
    <style>
        .grey, .green{
            color :white;
        }
            .grey{
                background-color:gray;
                height:50px;
                width:200px
            }
            .green{
                background-color:lime;
                height:50px;
                width:200px
            }
        </style>
</head>
<body>

    
<div class="grey">
    <?php
        for ($i=0; $i < count($db['teachers']); $i++) { ?>
        <p>
            <?php echo $db['teachers'][$i]['name'];?> 
            <?php echo $db['teachers'][$i]['lastname'];?>
        </p>
        <?php
    };?>
</div>
<div class="green">
        <?php
        for ($i=0; $i < count($db['pm']); $i++) { ?>
        <p>
            <?php echo $db['pm'][$i]['name'];?> 
            <?php echo $db['pm'][$i]['lastname'];?>
        </p>
        <?php
    }; ?>
</div>
</body>
</html>