<?php
  session_start();

  if (isset($_GET["email"])) 
    $erro_email = $_GET["email"];
  else
    $erro_email = null;

  if (isset($_GET["senha"])) 
    $erro_senha = $_GET["senha"];
  else
    $erro_email = null;

  if(isset($_GET["err_session"]))
    $erro_sessao = $_GET["err_session"];
  else
    $erro_sessao = null;
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                  <span name="erro_email" class="text-danger"><?php echo ($erro_email == "erro")? "E-mail inválido":""; ?></span>
                </div>
                <div class="form-group">
                  <input name="password" type="password" class="form-control" placeholder="Senha">
                  <span name="erro_senha" class="text-danger"><?php echo ($erro_senha == "erro")? "Senha inválida":""; ?></span>
                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                <span name="err_session" class="text-danger"><?php echo ($erro_sessao == "yes")? "Faça login antes de acessar a página!":""; ?></span>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>