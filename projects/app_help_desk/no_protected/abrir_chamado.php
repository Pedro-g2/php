<?php
    require_once "../protected/registra_chamado.php";
?>

<html>
<head>
<meta charset="utf-8" />
<title>App Help Desk</title>

</head>

<body>

Abertura de chamado <br><br>

    <form action="../protected/registra_chamado.php" method="post">
        <label>Título</label>
        <input name="titulo" type="text" placeholder="Título" required> <br>
        <label>Categoria</label>
        <select name="categoria"> 
        <option>Criação Usuário</option>
        <option>Impressora</option>
        <option>Hardware</option>
        <option>Software</option>
        <option>Rede</option>
        </select> <br>
        <label>Descrição</label>
        <textarea name="descricao" rows="3"></textarea><br>
        <button type="submit">Abrir</button> <br>
    </form>

    <a href="home.php">Voltar</a> <br>

</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        if(isset($_GET['sucesso'])) echo 'Chamado aberto com sucesso!';
    }