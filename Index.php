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
      <section id="Banner">
        <img src="./Imagens/Banne.png" alt="Banner">
      </section>  

      <section id="Info"> <!-- Informações sobre o mercado -->
        <h2>Como trabalhamos</h2>
        <p>Nós vendemos os melhores produtos para você,a um preço acessível e com promoções de segunda a sexta(Clique em "Promoções" para saber mais).</p>
        <p>Além disso os nossos produtos são dos mais diversos(clique em "Produtos para mais informações").</p>
        <p>Cadastre-se para ter acesso a descontos exclusivos(clique em "Cadastre-se" para mais informações).</p>
        <p>Também oferecemos suporte em casos específicos(clique em "Fale-conosco" caso precise de alguma ajuda).</p>
        <h2>Contato</h2>
        <p>Telefone:(12)11111-1111</p>
        <p>E-mail:mercadinhopoint@email.com</p>      
      </section>
      <aside id="Lateral-m1"> <!-- mapa -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2450.8193973044413!2d-45.532402368500094!3d-23.020804165037127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smercadinho!5e0!3m2!1spt-BR!2sbr!4v1654008798849!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </aside>
    </main>

    <footer id="rodape-m1"> <!-- Rodapé -->
      <p>Caio, Cecília e Daniel &copy 2022</p>
    </footer>
</body>
</html>