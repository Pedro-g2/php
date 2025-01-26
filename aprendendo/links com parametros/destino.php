<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $frutas = array("laranja.png", "maca.png", "abacate.png");
        $codigo = $_GET["codigo"];
    ?>

    <img src="<?php echo $frutas[$codigo]; ?>" alt="">
</body>
</html>