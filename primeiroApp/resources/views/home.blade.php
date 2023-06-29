<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TWT The World Tag</title>
    <link rel="stylesheet" href="{{asset('cssfile/index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <form action="{{route('meucarro')}}">
                <input type="image" src="/imagens/carrinho.png" alt="Submit" width="48" height="48">
            </form>
        </ul>
    </nav>
    <div class="retangulo"></div>
    <div class="osso"></div>
    <main class="main">
        <div class="center">
            <img src="/imagens/PESSOAS.png" alt="">
        </div>

        <div class="quadro">
            <p>Desenvolvimento de Sistema de Tags: </p>
            <h2>TWT É o principal destino online <br>
                para tudo relacionado a tags de <br>
                identificação.<br>
                Facilitando a Identificação e <br>
                Cuidado de Animais e Pessoas </h2>

        </div>
        <h1 class="titulo">Todas as Tags</h1>
    </main>
    <div class="amostra">
        <div class="gallery">
            <figure class="gallery__item gallery__item--1">
                <img src="/imagens/COLAR1.png" alt="Gallery image 1" class="gallery__img">
                <h3>Tag de Idetificação</h3>
                <h4>R$ 35,00</h4>
                <form action="identificacao14">
                    <input class="button button1" type="submit" value="Comprar" />
                </form>
            </figure>
            <figure class="gallery__item gallery__item--2">
                <img src="/imagens/COLAR2.png" alt="Gallery image 2" class="gallery__img">
                <h3>Tag de Idetificação</h3>
                <h4>R$ 35,00</h4>
                <form action="identificacao5">
                    <input class="button button1" type="submit" value="Comprar" />
                </form>
            </figure>
            <figure class="gallery__item gallery__item--3">
                <img src="/imagens/COLAR3.png" alt="Gallery image 3" class="gallery__img">
                <h3>Tag de Idetificação</h3>
                <h4>R$ 35,00</h4>
                <form action="identificacao6">
                    <input class="button button1" type="submit" value="Comprar" />
                </form>
            </figure>
            <figure class="gallery__item gallery__item--4">
                <img src="/imagens/COLAR4.png" alt="Gallery image 4" class="gallery__img">
                <h3>Tag de Idetificação</h3>
                <h4>R$ 35,00</h4>
                <form action="identificacao10">
                    <input class="button button1" type="submit" value="Comprar" />
                </form>
            </figure>
        </div>
    </div>

    <div class="footer">
        <nav class="rodape">
            <ul>
                <li><img class="foto" src="/imagens/LOGO2.png" alt=""></li>
                <li><a href="{{route('pedido.listar')}}">Enviado</a></li>
                <li><a href="pedido">Aconpanhe seu pedido</a> </li>
                <li><a href="faleconosco">Fale Conosco</a></li>
            </ul>
        </nav>
    </div>

</body>

</html>