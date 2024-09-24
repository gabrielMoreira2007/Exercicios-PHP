<?php //abre a tag php
    // a linha abaixo verifica se o metodo de requisição no html é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // as 3 linhas abaixo recebem os dados do formulário do html 
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
}
?>
<!-- a linha acima fecha a tag php -->
<!DOCTYPE html>
<html lang="pt-BR">
    <style>
        body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f8ff;
    font-family: Arial, sans-serif;
    margin: 0;
}

.container {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    max-width: 400px;
    width: 100%;
}

h1 {
    color: #4caf50;
    margin-bottom: 20px;
}

.info-list {
    list-style-type: none; 
    padding: 0; 
    margin: 20px 0; 
}

.info-list li {
    font-size: 1.1rem;
    color: #333;
    margin: 10px 0;
}

.success-message {
    font-size: 1.2rem;
    color: #333;
    margin-top: 20px; 
    font-weight: bold;
}

    </style>
<head>
    <meta charset="UTF-8">
    <title>Cliente Cadastrado</title>
</head>
<body>
    <div class="container">
        <h1>Cadastro Realizado com Sucesso!</h1>
        <p class="success-message">Cliente cadastrado com sucesso!</p>
        <ul class="info-list">
            <!-- a linha abaixo exibe o valor de nome, que é oque o usuário colocar no formulário -->
            <li><strong>Nome:</strong> <?php echo $nome; ?></li>
            <!-- a linha abaixo exibe o valor de email, que é oque o usuário colocar no formulário -->
            <li><strong>E-mail:</strong> <?php echo $email; ?></li>
            <!-- a linha abaixo exibe o valor de telefone, que é oque o usuário colocar no formulário -->
            <li><strong>Telefone:</strong> <?php echo $telefone; ?></li>
        </ul>
    </div>
</body>
</html>
