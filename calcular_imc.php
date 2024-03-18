<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = str_replace(",", ".", $_POST["peso"]);
        $altura = str_replace(",",".", $_POST["altura"]);
        $imc = $peso / ($altura * $altura);

        if ($imc < 17) {
            $situacao = "Muito abaixo do peso";
        } elseif ($imc >= 17 && $imc < 18.5) {
            $situacao = "Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc < 25) {
            $situacao = "Peso normal";
        } elseif ($imc >= 25 && $imc < 30) {
            $situacao = "Acima do peso";
        } elseif ($imc >= 30 && $imc < 35) {
            $situacao = "Obesidade I";
        } elseif ($imc >= 35 && $imc < 40) {
            $situacao = "Obesidade II (severa)";
        } else {
            $situacao = "Obesidade III (mórbida)";
        }
     
    echo "<h2>Seu IMC é: " . number_format($imc, 2) . "</h2>";
    echo "<p>Situacao: " . $situacao . "</p>";
    }
    ?>

</body>
</html>