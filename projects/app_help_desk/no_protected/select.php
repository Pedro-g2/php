<?php

    include "../protected/usuario.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form name="sel" action="" method="post">
        <label for="email">E-mail: </label>
        <input type="text" name="email" id="email" required><br><br>
        <button type="submit" name="selecionar">Selecionar</button>
    </form>

    <a href="./index.php">Voltar</a>

<?php

   $user = new Usuario();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(!$_POST['email'])
            return;
        $email = $_POST['email'];
        $user->search_user($email);
       }

       echo "<pre>";
       print_r($user);
       echo "<pre>";
    
?>

</body>
</html>