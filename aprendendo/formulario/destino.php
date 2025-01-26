<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <pre>
        <?php
            print_r($_POST);
        ?>
    </pre> -->
    
    <?php
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            echo $nome."<br>";
            echo $email;
        }else{
            echo "Nenhum dado enviado";
        }
    ?>
</body>
</html>