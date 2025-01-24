<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $a = 10;
            $b = 15;

            if($a < $b){
                echo "\$b é maior";
            }else if($a > $b){
                echo "\$a é maior";
            }else{
                echo "\$a e \$b são iguais";
            }
        ?>
    </body>
</html>