<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $_dia = "as d";

            switch($_dia){
                case 'segunda':
                    echo "Segunda";
                    break;
                case 'terça':
                    echo "terça";
                    break;
                case 'quarta':
                    echo "quarta";
                    break;
                case 'quinta':
                    echo "quinta";
                    break;
                case 'sexta':
                    echo "sexta";
                    break;
                case 'sábado':
                    echo "sábado";
                    break;
                case 'domingo':
                    echo "domingo";
                    break;
                default:
                    echo "Dia iválido";
            }
        ?>
    </body>
</html>