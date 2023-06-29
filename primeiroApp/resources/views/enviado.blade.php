<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TWT The World Tag</title>
    <link rel="stylesheet" href="{{asset('cssfile/enviado.css')}}">
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
            <form action="carro">
                <input type="image" src="/imagens/carrinho.png" alt="Submit" width="48" height="48">
            </form>
        </ul>
    </nav>
    <div class="retangulo"></div>
    <div class="osso"> </div>
    <main class="main">
        <div>
            <h1 class="Q">Todas as encomendas</h1>
            <h1 class="W">Enviado</h1>
            <h1 class="E">Processando</h1>
            <h1 class="R">Devolução</h1>
        </div>
        <div class="quadrado">
                <p class="Z">ENTREGUE</p>
                @foreach ($produtos as $produto)
                    <h2 class="t"><img class="icons" src="{{$produto->file}}" alt=""></h2>
                    <p class="C">{{$produto->$produto}} </p>
                    <p class="X">x 1</p>
                    <P class="V">R$ {{$produto->valor}},00 </p>
                @endforeach    
                
                <div class="linha"></div>
                <p class="AA">Total</p>
                <p class="SS">R$ {{$valorTotal}},00 </p>
                <form class="GG" action="tags">
                    <input class="button button1" type="submit" value="Comprar novamente" />
                </form>
        </div>
    </div>
    </main>
    <!-- <div>
        <nav class="rodape">
            <ul>
                <li><img class="foto" src="/imagens/LOGO2.png" alt=""></li>
                <li><a href="enviado">Enviado</a></li>
                <li><a href="pedido">Aconpanhe seu pedido</a> </li>
                <li><a href="faleconosco">Fale Conosco</a></li>
            </ul>
        </nav>
    </div> -->
</body>
</html>