<?php 

if(!isset($_SESSION['id'])){
    die("<p>Você não tem permissão para acessar essa página.<a href=\"Index.php\">Clique aqui para voltar à página principal</a></p>");
}
else{
    if($_SESSION['tipo_de_usuario'] != "funcionario"){
        die("<p>Você não tem permissão para acessar essa página.<a href=\"Index.php\">Clique aqui para voltar à página principal</a></p>");
    }
}

?>