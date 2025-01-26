<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="destino.php" method="post">
        <p>
            <label for="nome">Nome completo: </label>
            <input type="text" name="nome" id="nome">
        </p>

        <p>
            <label for="email">E-mail: </label>
            <input type="text" name="email" id="email">
        </p>

        <p>
            <input type="submit" value="Enviar Cadastro">
        </p>
    </form>
</body>
</html>