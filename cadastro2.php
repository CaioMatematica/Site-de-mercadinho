<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadinho Point - Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    form{
        margin-bottom: 50px;
    }
</style>
<body>
    <header id="Cab-m1">
        <img src="./Imagens/Slide1.PNG" alt="Logo" id="Logo1">
        <h1>MERCADINHO POINT</h1>
        <?php include("canto.php"); ?>
        <nav id="Nav-m1">
          <ul id="Links">
            <li><a href="./Index.php">Home</a></li>
            <li><a href="./Promocoes.php">Promoções</a></li>
            <li><a href="./Produtos.php">Produtos</a></li>
            <li><a href="#">Cadastre-se</a></li>
            <li><a href="./Pedidos.php">Pedidos</a></li>
          </ul>
        </nav>
    </header>

    <main id="Corpo-m1">
        
    <?php 
    include('conexao.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    
    mysqli_query($conexao,"INSERT INTO Cliente(cli_id,cli_nome,cli_senha,cli_telefone,cli_email) VALUES (DEFAULT,'$nome','$senha','$telefone','$email');");

    mysqli_close($conexao);
    ?>    

    </main>
    <footer id="rodape-m4">
        <p>Caio, Cecília e Daniel &copy 2022</p>
      </footer>
</body>
</html>