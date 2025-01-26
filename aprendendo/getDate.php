<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        date_default_timezone_set("Brazil/East");
        setlocale(LC_TIME, "portuguese");
        $data = getdate();
        $nome_meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", 
        "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
    
        $hora = $data["hours"];
        $minuto = $data["minutes"];
        $segundo = $data["seconds"];

        $dia = $data["mday"];
        $mes = $data["mon"];
        $ano = $data["year"];
        $mes_nome = $data["month"];
        $mes_nome_pt = date("F");

        $hora_completa = $hora.":".$minuto.":".$segundo;
        $data_completa = $dia."/".$mes."/".$ano;
        // $data_nome_mes = $dia." de ".$nome_meses[$mes_nome_pt - 1]." de ".$ano;
        $data_nome_mes = $dia." de ".$mes_nome_pt." de ".$ano;

        echo $hora_completa."<br>";
        echo $data_completa."<br>";
        echo $data_nome_mes."<br>";
    ?>

    <pre>
        <?php
            print_r($data);
        ?>
    </pre>
</body>
</html>