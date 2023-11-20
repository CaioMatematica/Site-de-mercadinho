<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadinho Point - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="Cab-m1"> <!-- Cabeçalho -->
        <img src="./Imagens/Slide1.PNG" alt="Logo" id="Logo1">
        <h1>MERCADINHO POINT</h1>
        <?php include("canto.php"); ?>
        <nav id="Nav-m1"> <!--Navegação-->
          <ul id="Links">
            <li><a href="Index.php">Home</a></li>
            <li><a href="./Promocoes.php">Promoções</a></li>
            <li><a href="./Produtos.php">Produtos</a></li>
            <li><a href="./Cadastro.php">Cadastre-se</a></li>
            <li><a href="./Pedidos.php">Pedidos</a></li>
          </ul>
        </nav>
    </header>

    <main id="Corpo-m1"> <!-- Corpo principal -->
      <?php 
      
      session_start();

      include('conexao.php');

      $id = $_SESSION['id'];

      $sql = "DELETE FROM cliente WHERE cli_id = '$id'";
      
      mysqli_query($conexao,"$sql");

      include('logout.php');
      ?>
    </main>

    <footer id="rodape-m1"> <!-- Rodapé -->
      <p>Caio, Cecília e Daniel &copy 2022</p>
    </footer>
</body>
</html>