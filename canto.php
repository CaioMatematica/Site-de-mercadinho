<?php 

session_start();

if(isset($_SESSION['id'])){
  echo "<div class=\"usuario\">
  <p>".$_SESSION['nome']."</p>
  <div class=\"links-ocultos\">
  <p><a href=\"info.php\">Informações</a></p>
  <p><a href=\"logout.php\">Sair</a></p>
  </div>
  </div>";
}
else{
  echo "<p class=\"usuario\"><a href=\"login.html\">login</a></p>";
}

?>