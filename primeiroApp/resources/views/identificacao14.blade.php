<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TWT The World Tag</title>
    <link rel="stylesheet" href="{{asset('cssfile/identificacao.css')}}">
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
        <div class="quadro">
            <img  class="xd" src="/imagens/COLAR1.PNG" alt="">
        </div>
       <div class="quadro2">
       <h1 class="title">Tag de Identificação</h1>
       <h2 class="r"><img class="icons" src="/imagens/estrela.png" alt=""></h2>
       <h2 class="t"><img class="icons" src="/imagens/estrela.png" alt=""></h2>
       <h2 class="y"><img class="icons" src="/imagens/estrela.png" alt=""></h2>
       <h2 class="u"><img class="icons" src="/imagens/estrela.png" alt=""></h2>
       <h2 class="i"><img class="icons" src="/imagens/estrela.png" alt=""></h2>
       <h4 class="o">Avaliações de clientes</h4>
       <h2 class="x">R$35,00</h2>
       <h3 class="c">Calcular frete</h3>
       <h2 class="v"><img class="icon" src="/imagens/caminhao.png" alt=""></h2>

       <h1 class="Q">Tamanho Mini – 3 x 3 x 0,3 cm</h1>
       <h1 class="W">Tamanho Standard – 4 x 4 x 0,3 cm</h1>

       <h1 class="tamanho">Escolha o tamanho da sua Tag*</h1>
    <div class="mini">
        <input type="radio" id="mini" name="escolha" value="mini">
        <label for="mini">Mini</label>
        <input type="radio" id="Sta" name="escolha" value="Sta">
        <label for="Sta">Standard</label><br>
    </div>
    <h1 class="algo">Digite os dados que serão gravados na Tag</h1>
        <div class="aa">
            <div class="meu-box">
                    <input type="text" name="nomeCompleto" id="nomeCompleto" class="input-nome" placeholder="Nome do Pet">
                    <label for="nomeCompleto" class="label-nome">Nome do Pet*</label> <br>
                    <input type="text" name="nomeCompleto" id="nomeCompleto" class="input-nome" placeholder="Nome do Tutor">
                    <label for="nomeCompleto" class="label-nome">Nome do Tutor*</label> <br>
                    <input type="text" name="nomeCompleto" id="nomeCompleto" class="input-nome" placeholder="(DDD) Número de Telefone">
                    <label for="nomeCompleto" class="label-nome">Telefone 1*</label> <br>
                    <input type="text" name="nomeCompleto" id="nomeCompleto" class="input-nome" placeholder="(DDD) Número de Telefone">
                    <label for="nomeCompleto" class="label-nome">Telefone 2*</label> <br>
            </div>
        </div>
        <form action="{{route('adicionar.dados14')}}" method="POST">
        @csrf
            <input class="B" type="submit" value="ADICIONAR AO CARRINHO" />
        </form>
    </div>
    
        
    </main>
    <div class="footer">
        <nav class="rodape">
            <ul>
                <li><img class="foto" src="/imagens/LOGO2.png" alt=""></li>
                <li><a href="">Contato</a></li>
                <li><a href="pedido">Aconpanhe seu pedido</a> </li>
                <li><a href="faleconosco">Fale Conosco</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>