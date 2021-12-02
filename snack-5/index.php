<?php
$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio non eligendi odio tenetur quisquam blanditiis consequuntur qui optio soluta. Incidunt tempora nihil rem necessitatibus hic tempore quibusdam quod. Totam accusantium suscipit sed blanditiis nihil magnam reprehenderit in ad. Eius, cumque! Nemo sequi inventore, delectus sunt itaque libero reprehenderit exercitationem error iusto iure molestiae soluta doloribus officia. Labore dignissimos corporis harum obcaecati iste sapiente ad deleniti asperiores, rerum totam. Ab quibusdam voluptate quidem non inventore repudiandae corrupti ipsa maiores saepe eius totam nisi ut, unde ratione fuga qui dicta, ad aliquid. Quibusdam suscipit eveniet, eos voluptatem vel reiciendis ipsa error libero.';

$TXT= explode(".", $text);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack - 5</title>
</head>
<body>
<div>
    <?php 
    for ($i=0; $i <count($TXT); $i++) { ?>
    <p>
        <?php echo $TXT[$i];?>
    </p>

    <?php };?>
</div>
</body>
</html>