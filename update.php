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
        <form action="update2.php" method="post">
        <div class="Campo-form1">
                <label>Nome:</label>
                <?php echo "<input type=\"text\" value = ".$_SESSION['nome']."  name=\"nome\" id=\"Nome\" maxlength=\"120\" autofocus required>"; ?>
            </div>

            <div class="Campo-form1">
                <label>Senha:</label>
                <?php echo "<input type=\"text\" value = ".$_SESSION['senha']."  name=\"senha\" id=\"Nome\" maxlength=\"120\" autofocus required>"; ?>
            </div>

            <div class="Campo-form1">
                <label>Telefone:</label>
                <?php echo "<input type=\"text\" value = ".$_SESSION['telefone']."  name=\"telefone\" id=\"Nome\" maxlength=\"120\" autofocus required>"; ?>
            </div>

            <div class="Campo-form1">
                <label>Email:</label>
                <?php echo "<input type=\"text\" value = ".$_SESSION['email']."  name=\"email\" id=\"Nome\" maxlength=\"120\" autofocus required>"; ?>
            </div>

            <div class="Botoes">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </div>
        </form>
    </main>

    <footer id="rodape-m1"> <!-- Rodapé -->
      <p>Caio, Cecília e Daniel &copy 2022</p>
    </footer>
</body>
</html>