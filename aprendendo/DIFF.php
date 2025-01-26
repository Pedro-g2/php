<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $data_inicio = new DateTime("2023-05-13 15:23:45");
        $data_fim = new DateTime("2024-01-25 07:03:25");
        $intervalo_datas = $data_inicio->diff($data_fim);

    ?>

    <pre>
        <?php
            print_r($intervalo_datas);
        ?>
    </pre>

    <?php
        echo "Anos: ";
        print_r($intervalo_datas->format("%y"));
        echo "<br>Meses: ";
        print_r($intervalo_datas->format("%m"));
        echo "<br>Dias: ";
        print_r($intervalo_datas->format("%d"));
        echo "<br>Dias totais: ";
        print_r($intervalo_datas->format("%a"));
        echo "<br>";
    ?>
</body>
</html>