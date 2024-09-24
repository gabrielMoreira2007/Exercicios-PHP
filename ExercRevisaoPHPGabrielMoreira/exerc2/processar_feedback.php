<?php //abre a tag php
    // a linha abaixo verifica se o metodo de requisição no html é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // as 3 linhas abaixo recebem os dados do formulário do html 
    $produto = htmlspecialchars($_POST['produto']);
    $nota = htmlspecialchars($_POST['nota']);
    $comentario = htmlspecialchars($_POST['comentario']);
}
?>
<!-- a linha acima fecha a tag php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Feedback Recebido</title>
    <style>
        body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #e0f7fa;
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
    color: #00796b;
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
    color: #00796b; 
    font-weight: bold; 
    text-align: center; 
    margin-top: 20px; 
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Feedback Recebido!</h1>
        <!-- a linha abaixo exibe o valor de produto, que é oque o usuário colocar no formulário -->
        <p><strong>Produto:</strong> <?php echo $produto; ?></p>
        <!-- a linha abaixo exibe o valor de nota, que é oque o usuário colocar no formulário -->
        <p><strong>Nota:</strong> <?php echo $nota; ?></p>
        <!-- a linha abaixo exibe o valor de comentario, que é oque o usuário colocar no formulário -->
        <p><strong>Comentário:</strong> <?php echo $comentario; ?></p>
        <p class="thank-you">Obrigado pelo seu feedback!</p>
    </div>
</body>
</html>
