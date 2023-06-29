<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TWT The World Tag</title>
    <link rel="stylesheet" href="{{asset('cssfile/carro.css')}}">
    <link rel="stylesheet" href="https://fontawesome.com/icons/bag-shopping?f=classic&s=light">
</head>
<body>
<nav class="container">
        <ul>
            <li><img class="foto" src="/imagens/LOGO2.png" alt=""></li>
            <li><a href="home">HOME</a></li>
            <li><a href="quemsomos">QUEM SOMOS</a> </li>
            <li><a href="tags">TAGS</a></li>
            <div id="divBusca">
                <img src="/imagens/21741.png" alt="Buscar..." />
                <input type="text" id="txtBusca" placeholder="Buscar..." />
                <button id="btnBusca">Buscar</button>
            </div>
            <form action="meucarro">
                <input type="image" src="/imagens/carrinho.png" alt="Submit" width="48" height="48">
            </form>
        </ul>
    </nav>
    <div class="retangulo"></div>
    <div class="osso"> </div>
    <main class="main">
        <h1>CARRINHO > Continuar Comprando > Pagar > Pedido Completo</h1>
        <div class="placas">


            <div class="quadrado">          
            <img class="tamanho" src="/imagens/carro.png" alt="">

            <h2 class="Z">        OH NÃO!!<br>SEU CARRINHO ESTÁ VAZIO</h2>

            <form action="home">
                <input class="B" type="submit" value="ENTRAR / CADASTRAR-SE" />
            </form>
            <h1 class="V">COMPRAR AGORA</h1>
            
            </div>
            <div class="teste"></div>
            
        </div>
    </main>
    <div class="footer">
        <nav class="rodape">
            <ul>
                <li><img class="foto" src="/imagens/LOGO2.png" alt=""></li>
                <li><a href="enviado">Enviados</a></li>
                <li><a href="pedido">Aconpanhe seu pedido</a> </li>
                <li><a href="faleconosco">Fale Conosco</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>