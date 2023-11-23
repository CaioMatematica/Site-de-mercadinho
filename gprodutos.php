<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadinho Point - Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    input[type="file"]{
        width:300px;
    }
    fieldset{
        padding:10px;
        display:flex;
    }
</style>
<body>
    <header id="Cab-m1"> <!-- Cabeçalho -->
        <img src="./Imagens/Slide1.PNG" alt="Logo" id="Logo1">
        <h1>MERCADINHO POINT</h1>
        <?php include("canto.php"); ?>
        <nav id="Nav-m1"> <!--Navegação-->
          <ul id="Links">
            <li><a href="Indexf.php">Home</a></li>
            <li><a href="./gprodutos.php">Gerenciar Produtos</a></li>
            <li><a href="./vpedidos.php">Ver Pedidos</a></li>
            <li><a href="./clientes.php">Ver Clientes</a></li>
            <li><a href="./vprodutos.php">Ver produtos</a></li>
          </ul>
        </nav>
    </header>

    <main id="Corpo-m1"> <!-- Corpo principal -->
      <?php include('protect.php');?>
      <fieldset>
        <legend>Cadastrar produto</legend>
          <form id="Form-m1" action="cadastro2.php" method="post">
                <div class="Campo-form1">
                    <label>Nome:</label>
                    <input type="text" name="nome" id="Nome" placeholder="Digite o nome do produto" maxlength="120" autofocus required>
                </div>
                <div class="Campo-form1">
                    <label>Descrição:</label>
                    <input type="password" name="descricao" id="Nome" placeholder="Digite a descrição do produto" maxlength="20" autofocus required>
                </div>
                <div class="Campo-form1">
                    <label>Preço:</label>
                    <input type="number" name="preco" id="Telefone" placeholder="Digite o preço do prouto" maxlength="14" required>
                </div>
                <div class="Campo-form1">
                    <label>Imagem:</label>
                    <input type="file" name="img1" id="Email" maxlength="230" required>
                </div>
                <div class="Campo-form1">
                    <label>Imagem:</label>
                    <input type="file" name="img2" id="Email" maxlength="230" required>
                </div>
                <div class="Botoes">
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Limpar">
                </div>
            </form>
      </fieldset>
    </main>

    <footer id="rodape-m1"> <!-- Rodapé -->
      <p>Caio, Cecília e Daniel &copy 2022</p>
    </footer>
</body>
</html>