<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Formulário IMC</h1>
    <form action ="calcular_imc.php" method ="post">
       <label for ="peso" >Peso (em quilos) : </label>
       <input typr ="text"
              id ="peso" 
              name ="peso" 
              required>
       <br>
       <label for ="altura">Altura (em metros) : </label>
       <input type ="text" 
              id ="altura" 
              name ="altura"
              required>
       <br>
       <input type ="submit" value ="Calcular IMC">
       <input type ="reset" value ="Apagar">
</form> 

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
        echo '<table border="1">';
        echo '<tr><th>Resultado</th><th>Situação</th></tr>'; 
        echo "<h2>Seu IMC é: " . number_format($imc, 2) . "</h2>";
        echo "<h2>Situacao: " . $situacao . "</h2>";
    }
    ?>
</body>
</html>