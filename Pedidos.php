<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadinho point - Pedidos</title>
    <link rel="stylesheet" href="style.css">
    <style>
        main div{
            display: flex;
            align-items: center;
        }
        div .quantidade-produtos{
            width: 10%;
        }
        div .quantidade-produtos,div .select-produto{
            height: 1.8em;
        }
    </style>
</head>
<body>
    <header id="Cab-m1">
        <img src="./Imagens/Slide1.PNG" alt="Logo" id="Logo1">
        <h1>MERCADINHO POINT</h1>
        <?php include("canto.php"); ?>
        <nav id="Nav-m1">
          <ul id="Links">
            <li><a href="./Index.php">Home</a></li>
            <li><a href="./Promocoes.php">Promoções</a></li>
            <li><a href="./Produtos.php">Produtos</a></li>
            <li><a href="./Cadastro.php">Cadastre-se</a></li>
            <li><a href="#">Pedidos</a></li>
          </ul>
        </nav>
</header>
        <main id="Corpo-m1">
                <form id="Form-m2" action="#" method="post">
                <div class="Campo-form1">    
                    <label>Nome</label>
                    <input type="text" name="Nome" id="Nome" placeholder="Digite seu nome completo" maxlength="120" autofocus required>
                </div>

                <div class="Campo-form1">
                    <label>Endereço</label>
                    <input type="text" name="Endereco" id="Endereço" placeholder="Digite seu endereço" maxlength="9" required>
                </div>
                
                <div class="Campo-form1">
                    <label for="">Frutas/legumes/verduras:</label>
                    <select name="produto_frutas" id="" class="select-produto">
                        <option value="">Maçã</option>
                        <option value="">Banana</option>
                        <option value="">Alface</option>
                    </select>
                    <input type="number" name="quantidade_frutas" class="quantidade-produtos">
                </div>

                <div class="Campo-form1">
                    <label for="">Frios e laticíneos:</label>
                    <select name="produto_frios" id="" class="select-produto">
                        <option value="">Leite</option>
                        <option value="">Manteiga</option>
                        <option value="">Leite Achocolatado</option>
                    </select>
                    <input type="number" name="quantidade_laticineos" class="quantidade-produtos">                                                     
                </div>
                <div class="Campo-form1">
                    <label for="">Massas:</label>
                    <select name="produto_massas" id="" class="select-produto">
                        <option value="">Pão</option>
                        <option value="">Bolacha</option>
                        <option value="">Macarrão</option>
                    </select>
                    <input type="number" name="quantidade_massas" class="quantidade-produtos">
                </div>

                <div class="Campo-form1">
                    <label for="">Doces:</label>
                    <select name="produto_doces" id="" class="select-produto">
                        <option value="">Bala</option>
                        <option value="">Chocolate</option>
                        <option value="">Bombom</option>
                    </select>
                    <input type="number" name="quantidade_doces" class="quantidade-produtos">
                </div>

                <div class="Campo-form1">
                    <label>Data de entrega</label>
                    <input type="date" name="Dat_ent" id="Dat_ent" required>
                </div>

                <div class="Campo-form1">
                    <label>Horário de entrega</label>
                    <input type="time" name="Hor_ent" id="Hor_ent" placeholder="Pode ser que atrase até 1 hora" required>
                </div>
                
                <div class="Botoes">
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Limpar">
                </div>
            </form>
        </main>
	
    <footer id="rodape-m5"> <!-- Rodapé -->
      <p>Caio,Cecília e Daniel &copy 2022</p>
    </footer>
	<script src="script.js"></script>
</body>
</html>