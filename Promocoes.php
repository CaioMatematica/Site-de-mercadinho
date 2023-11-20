<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadinho Point - Promoções</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="Cab-m1">
        <img src="./Imagens/Slide1.PNG" alt="Logo" id="Logo1">
        <h1>MERCADINHO POINT</h1>
        <?php include("canto.php"); ?>
        <nav id="Nav-m1">
          <ul id="Links">
            <li><a href="./Index.php">Home</a></li>
            <li><a href="#">Promoções</a></li>
            <li><a href="./Produtos.php">Produtos</a></li>
            <li><a href="./Cadastro.php">Cadastre-se</a></li>
            <li><a href="./Pedidos.php">Pedidos</a></li>
          </ul>
        </nav>
    </header>

    <main id="Corpo-m1">
      <table id="Tabela-de-promo">
	  <!--Células diferenciadas para facilitar a edição em css-->
        <tr>
          <td class="m-Cel">
            Dia da semana
          </td>

          <td class="M-Cel">
            Produtos
          </td>
        </tr>

        <tr>
          <td class="m-Cel">
            Segunda-feira
          </td>

          <td class="M-Cel">
            Massas
          </td>
        </tr>

        <tr>
          <td class="m-Cel">
            Terça-feira
          </td>

          <td class="M-Cel">
            Higiene Pessoal,Produtos de limpeza 
          </td>
        </tr>

        <tr>
          <td class="m-Cel">
            Quarta-feira
          </td>

          <td class="M-Cel">
            Frios e laticíneos
          </td>
        </tr>

        <tr>
          <td class="m-Cel">
            Quinta-feira
          </td>

          <td class="M-Cel">
            Frutas,verduras e legumes
          </td>
        </tr>

        <tr>
          <td class="m-Cel">
            Sexta-feira
          </td>

          <td class="M-Cel">
            Doces
          </td>
        </tr>
      </table>
    </main>

    <footer id="rodape-m2">
      <p>Caio, Cecília e Daniel &copy 2022</p>
    </footer>
</body>
</html>