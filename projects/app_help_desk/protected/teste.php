<?php

    require_once "./classes.php";

    $bd = new BancoDeDados('select * from usuarios');
    
    // while($usuarios = $bd->consultar()) {
    //     echo '<pre>';
    //         print_r($usuarios);
    //     echo '</pre>';
    // }

    $bd = new BancoDeDados("insert into usuarios(nome, email, senha, id_perfil) 
                            values('Juvencia Ramos Romão', 'juvencia@email.com', 123, 2)"); 