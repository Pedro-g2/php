<?php

    $usuarios_app = array(
        array("email"=>"adm@email.com","senha"=>"123456"),
        array("email"=>"usr@email.com","senha"=>"abcdef")
    );    

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $usr_email = $_POST["email"];
        $usr_senha = $_POST["password"];

        $valida_email = false;
        $valida_senha = false;

        for($cont = 0; $cont < count($usuarios_app); $cont++){
        
            if($usr_email == $usuarios_app[$cont]["email"]){
                $valida_email = true;
                if($usr_senha == $usuarios_app[$cont]["senha"]){
                    $valida_senha = true;
                }
            }
        }

        if(!$valida_email){
            header("Location: index.php?email=erro");
        }else if(!$valida_senha){
            header("Location: index.php?senha=erro");
        }
    }
    

    
    
   
        