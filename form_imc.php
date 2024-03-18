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
</body>
</html>