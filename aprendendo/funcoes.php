<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        function convertTemperature($temperatura, $scale){
            if($scale == "c"){
                return $temperatura * 1.8 +32;
            } else if($scale == "f"){
                return ($temperatura - 32) / 1.8;
            }else{
                echo "Escala inválida";
            }
        }

        echo number_format(convertTemperature(30, "f"), 2)."<br>";
        echo convertTemperature(30, "c");
    ?>
</body>
</html>
