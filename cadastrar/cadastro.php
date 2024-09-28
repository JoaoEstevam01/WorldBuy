<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Coletando dados do formulário
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $dados = "Nome: $nome\nTelefone: $telefone\nEndereço: $endereco\nEmail: $email\nMensagem: $mensagem\n\n";
    file_put_contents('cadastros.txt', $dados, FILE_APPEND);
    echo "<script>alert('Obrigado pelo cadastro! Em breve você receberá um e-mail para confirmar a participação em nossa comunidade.'); window.location.href = '/site-de-venda/index.php';</script>";
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cadastro</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="cadastro.css">
</head>
<body class="contact-form">
    <div class="form-container">
        <h2 style="font-family: 'Mulish', sans-serif;">Registrar-se</h2>
        <form action="cadastro.php" method="post">
            <input type="text" name="nome" placeholder="Nome Completo" required style="font-family: 'Mulish', sans-serif;">
            <input type="tel" name="telefone" placeholder="Telefone" required style="font-family: 'Mulish', sans-serif;">
            <input type="text" name="endereco" placeholder="Endereço" required style="font-family: 'Mulish', sans-serif;">
            <input type="email" name="email" placeholder="Email" required style="font-family: 'Mulish', sans-serif;">
            <button type="submit" class="secondary" style="font-family: 'Mulish', sans-serif;">Enviar</button>
        </form>
    </div>
</body>
</html>