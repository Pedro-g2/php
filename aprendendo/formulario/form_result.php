<?php
    if(isset($_POST["enviar"]))
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_POST["enviar"])){
    ?>
        <form action="form_result.php" method="post">
            <p>
                <label for="nome">Nome completo: </label>
                <input type="text" name="nome" id="nome">
            </p>

            <p>
                <label for="email">E-mail: </label>
                <input type="text" name="email" id="email">
            </p>

            <p>
                <input type="submit" name="enviar" value="Enviar Cadastro">
            </p>
        </form>
    <?php
        }else{
            if($_SERVER["REQUEST_METHOD"] === "POST"){
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                echo $nome."<br>";
                echo $email;
            }else{
                echo "Nenhum dado enviado";
            }
        }
    ?>
</body>
</html>