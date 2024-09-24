<?php //abre a tag php
    // a linha abaixo verifica se o metodo de requisição no html é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // as 3 linhas abaixo recebem os dados do formulário do html 
    $solicitante = htmlspecialchars($_POST['solicitante']);
    $data = htmlspecialchars($_POST['data']);
    $horario = htmlspecialchars($_POST['horario']);
}
?>
<!-- a linha acima fecha a tag php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Reserva Confirmada</title>
    <style>
        body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #ffecb3; 
    font-family: Arial, sans-serif;
    margin: 0;
}

.container {
    background-color: #ffffff; 
    border-radius: 8px; 
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px; 
    text-align: left; 
    max-width: 400px; 
    width: 100%;
}

h1 {
    color: #f57c20;
    margin-bottom: 20px; 
    text-align: center; 
}

p {
    font-size: 1.1rem;
    color: #333;
    margin: 10px 0;
}

.thank-you {
    font-size: 1.2rem;
    color: #f57c20;
    font-weight: bold;
    text-align: center;
    margin-top: 20px;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Reserva Confirmada!</h1>
        <!-- a linha abaixo exibe o valor de solicitante, que é oque o usuário colocar no formulário -->
        <p><strong>Nome do Solicitante:</strong> <?php echo $solicitante; ?></p>
        <!-- a linha abaixo exibe o valor de data, que é oque o usuário colocar no formulário -->
        <p><strong>Data:</strong> <?php echo $data; ?></p>
        <!-- a linha abaixo exibe o valor de horario, que é oque o usuário colocar no formulário -->
        <p><strong>Horário:</strong> <?php echo $horario; ?></p>
        <p class="thank-you">A reserva foi realizada com sucesso!</p>
    </div>
</body>
</html>
