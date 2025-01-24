<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php   

            $arraySorteados = array();                 
            for($_i = 0; $_i < 6; $_i++){

                $valida = false;
                do{
                    $numeroSorteado = rand(1, 60);

                    if(in_array($numeroSorteado, $arraySorteados))
                        $valida = false;
                    else{
                        $valida = true;
                        $arraySorteados[] = $numeroSorteado;
                    }
        
                }while($valida == false);
                
            }
        ?>

        <pre>
            <?php
                sort($arraySorteados);
                print_r($arraySorteados);
            ?>
        </pre>
    </body>
</html>