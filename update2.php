<?php 

session_start();

include('conexao.php');

    $id = $_SESSION['id'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    mysqli_query($conexao,"UPDATE cliente SET cli_nome = '$nome',cli_senha = '$senha',cli_telefone = '$telefone',cli_email = '$email' WHERE cli_id = '$id'");
    
    $_SESSION['nome'] = "$nome";
    $_SESSION['email'] = "$email";
    $_SESSION['telefone'] = "$telefone";
    $_SESSION['senha'] = "$senha";

    mysqli_close($conexao); 

    header("Location: info.php");


?>