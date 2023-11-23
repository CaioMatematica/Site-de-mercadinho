<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadinho Point - Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            color:white;
        }
        p{
            color:white;
        }
    </style>
</head>
<body>
    <header id="Cab-m1">
        <img src="./Imagens/Slide1.PNG" alt="Logo" id="Logo1">
        <h1>MERCADINHO POINT</h1>
        <nav id="Nav-m1">
          <ul id="Links">
            <li><a href="./Index.php">Home</a></li>
            <li><a href="./Promocoes.php">Promoções</a></li>
            <li><a href="./Produtos.php">Produtos</a></li>
            <li><a href="Cadastro.php">Cadastre-se</a></li>
            <li><a href="./Pedidos.php">Pedidos</a></li>
          </ul>
        </nav>
    </header>

    <main id="Corpo-m1">
        <?php 
        
        include('conexao.php');
        
        
        session_start();

        if(isset($_SESSION['id'])){
            echo "<p>Seja bem-vindo novamente".$_SESSION['nome'].".</p>";
        } 
        else{
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $tipo_de_pessoa = $_POST['tipo_de_pessoa'];
        if($tipo_de_pessoa == "funcionario"){
            $sql = "SELECT fun_id,fun_nome,fun_email,fun_senha,fun_telefone FROM funcionario WHERE fun_email = '$email' AND fun_senha = '$senha';";
        }
        else{
            $sql = "SELECT cli_id,cli_nome,cli_email,cli_senha,cli_telefone FROM cliente WHERE cli_email = '$email' AND cli_senha = '$senha';";
        }


        $consulta = mysqli_query($conexao,$sql);

        if(!$consulta){
            die("Não foi possível realizar a consulta");
        }
        
        $dados = mysqli_fetch_array($consulta);

        if(!$dados){
            die("<p>Usuário não encontrado.<a href=\"login.html\">Volte e tente novamente</a></p>");
        }
        else{
            $id = $dados[0];
            $nome = $dados[1];
            $email = $dados[2];
            $senha = $dados[3];
            $telefone = $dados[4];
            echo "<p>Seja bem-vindo novamente $nome.</p>";
            if($tipo_de_pessoa == "cliente"){
            header('Location:Index.php') ;
            }
            else{
                header('Location: Indexf.php');
            }
        }
            $_SESSION['id'] = "$id";
            $_SESSION['nome'] = "$nome";
            $_SESSION['email'] = "$email";
            $_SESSION['telefone'] = "$telefone";
            $_SESSION['senha'] = "$senha";
            $_SESSION['tipo_de_usuario'] = "$tipo_de_pessoa";
        }

        ?>
    </main>
    <footer id="rodape-m4">
        <p>Caio, Cecília e Daniel &copy 2022</p>
      </footer>
</body>
</html>