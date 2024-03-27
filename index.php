<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Salário</title>
    <link href="_css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <H2>Sistema de Salário</h1>

    <form method="post">
    <label for="nome">Nome do Vendedor:</label><br>
    <input type="text" id="nome" name="nome"><br><br>
    <label for="meta_semanal">Meta Semanal:</label><br>
    <input type="number" id="meta_semanal" name="meta_semanal"><br><br>
    <label for="meta_mensal">Meta Mensal:</label><br>
    <input type="number" id="meta_mensal" name="meta_mensal"><br><br>
    <input type="submit" value="Calcular Salário">
</form>
 
<?php 
 // Obter dados do formulário enviado via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $meta_semanal = $_POST['meta_semanal'];
    $meta_mensal = $_POST['meta_mensal'];

 // Calcular o salário com base nas metas semanais e mensais
    $salario_semanal = $meta_semanal * 4;
    $excedente_semanal = ($meta_semanal - 200) * 4;
    $excedente_mensal = $meta_mensal - 400;

  // Calcular o salário final somando os valores calculados
    $salario_final = $salario_semanal + $excedente_semanal + $excedente_mensal;
 
 // Exibir o resultado para o usuário
    echo "<h3>Resultado:</h3>";
    echo "Nome do Vendedor: $nome <br>";
    echo "Salário Final: R$ " . number_format($salario_final, 2, ',', '.');
}
?>
 
</body>
</html>