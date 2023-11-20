<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadinho Point - Seus Dados</title>
    <link rel="stylesheet" href="style.css">
    <style>
        section{
            color:#fff;
        }
        main ul{
            list-style: none;
            margin-bottom:20px;
        }
        h2{
            margin-bottom:10px;
        }
        main li{
            margin-bottom:5px;
        }
        main{
            background-color:#333;
            padding:15px;
            border-radius:20px;
        }
        footer{
            margin-left: 30%;
        background: #555;
        width: 40%;
        padding: 5px;
         border-radius: 5px;
    height: 3vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #efefef;
    font-family: Source Code Pro;
    margin-bottom: 1%;
        }
    </style>
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
      <section class="dados">
        <h2>Seus dados</h2>
        <?php 
        
        $id = $_SESSION['id'];
        $nome = $_SESSION['nome'];
        $email = $_SESSION['email'];

        echo "
        <ul>
            <li><strong>ID</strong>:$id</li>
            <li><strong>Nome</strong>:$nome</li>
            <li><strong>Email</strong>:$email</li>
        </ul>
        ";
        
        ?>
        <p><a href="delete.php">Excluir conta</a></p>
        <p><a href="update.php">Alterar dados</a></p>
      </section>
    </main>

    <footer id="rodape-m1"> <!-- Rodapé -->
      <p>Caio, Cecília e Daniel &copy 2022</p>
      <p>ggghgg</p>
    </footer>
</body>
</html>