<?php

    session_start();

    $perfis = array(1=>"Admistrativo", 2=>"Usuario");

    $usuarios_app = array(
        array("id"=>1, "email"=>"adm@email.com","senha"=>"123", "perfil_id"=>1),
        array("id"=>2, "email"=>"usr@email.com","senha"=>"123", "perfil_id"=>1),
        array("id"=>3, "email"=>"maria@email.com","senha"=>"123", "perfil_id"=>2),
        array("id"=>4, "email"=>"jose@email.com","senha"=>"123", "perfil_id"=>2)
    );    

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $usr_email = $_POST["email"];
        $usr_senha = $_POST["password"];

        $valida_email = false;
        $valida_senha = false;
        $usuario_id = null;
        $usuario_perfil_id = null;

        for($cont = 0; $cont < count($usuarios_app); $cont++){
        
            if($usr_email == $usuarios_app[$cont]["email"]){
                $valida_email = true;
                if($usr_senha == $usuarios_app[$cont]["senha"]){
                    $valida_senha = true;
                    $usuario_id = $usuarios_app[$cont]["id"];
                    $usuario_perfil_id = $usuarios_app[$cont]["perfil_id"];
                }
            }
        }

        if(!$valida_email){
            header("Location: index.php?email=erro");
        }else if(!$valida_senha){
            header("Location: index.php?senha=erro");
        }else if($valida_email && $valida_senha){
            $_SESSION["autenticado"] = "sim";
            $_SESSION["id"] = $usuario_id;
            $_SESSION["perfil_id"] = $usuario_perfil_id;
            header("Location: home.php?err_session=nao");
        }else{
            header("Location: index.php?err_session=yes");
        }
    }
    

    
    
   
        