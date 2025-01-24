<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_pessoa = array("nome"=>"Pedro", "idade"=>25, "cidade"=>"Brasília");

        foreach($_pessoa as $_chave => $_valor){
            echo $_chave.": ".$_valor."<br>";
        }
    ?>
</body>
</html>