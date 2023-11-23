<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadinho Point - Home</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table{
            border:2px solid #fff;
            border-radius: 10px;
            border-collapse: collapse;
        }
        table td,table th{
            border: 1px solid #fff;
            padding: 5px;
            vertical-align: middle;
            text-align: center;
            color:#fff;
        }
        th{
            background-color: #555;
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

      <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
        </tr>
          <?php
          
          include('conexao.php');
          $ordem = "cli_id";
          $sql1 = "SELECT cli_id,cli_nome,cli_telefone,cli_email FROM cliente ORDER BY $ordem";
          $query = mysqli_query($conexao, "$sql1");
          while ($row = mysqli_fetch_array($query)) {
            $id = $row[0];
            $nome = $row[1];
            $telefone = $row[2];
            $email = $row[3];
            echo "
            <tr>
                <td>$id</td>
                <td>$nome</td>
                <td>$telefone</td>
                <td>$email</td>
            </tr>
            ";
          }
          
          ?>
      </table>
    </main>

    <footer id="rodape-m1"> <!-- Rodapé -->
      <p>Caio, Cecília e Daniel &copy 2022</p>
    </footer>
</body>
</html>