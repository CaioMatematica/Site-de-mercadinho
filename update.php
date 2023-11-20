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
        <p>Digite apenas os dados que deseja alterar</p>
        <form action="update2.php" method="post">
        <div class="Campo-form1">
                <label>Nome:</label>
                <input type="text" name="nome" id="Nome" placeholder="Digite seu nome completo" maxlength="120" autofocus required>
            </div>

            <div class="Campo-form1">
                <label>Senha:</label>
                <input type="password" name="senha" id="Nome" placeholder="Digite uma senha segura" maxlength="20" autofocus required>
            </div>

            <div class="Campo-form1">
                <label>Telefone:</label>
                <input type="tel" name="telefone" id="Telefone" placeholder="(xx)xxxxx-xxxx" maxlength="14" required>
            </div>

            <div class="Campo-form1">
                <label>Email:</label>
                <input type="email" name="email" id="Email" placeholder="Digite seu email" maxlength="230" required>
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