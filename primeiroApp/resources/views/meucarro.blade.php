<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TWT The World Tag</title>
    <link rel="stylesheet" href="{{asset('cssfile/meucarro.css')}}">
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
        </ul>
    </nav>
    <div class="retangulo"></div>
    <div class="osso"> </div>
    <main class="main">
        <h1>Meu carrinho de compras</h1>
        <div class="placas">
        @foreach ($produtos as $produto)
                <img class="Q" src= "{{$produto->file}}" alt=""> </img>

                <h2>{{$produto->produto}}</h2>
                <h3>R${{$produto->valor}},00</h3>
               </h1><br>

               <form action="{{route('carrinho.destroy', $produto->id)}}" method="post">
                    @csrf
                    <input type="hidden" value='DELETE'>
                    <button class="B" type="submit">Remover</button>
               </form>
            @endforeach
                   
            <div class="quadrado" >
                <p class="Z">Resumo do pedido</p>
                <p class="X">{{$quantidadeProduto}}</p>
                <p class="C">Produtos </p>
                <P class="V">R$ {{$valorTotal}},00 </p>


                <p class="C">Frete </p>
                <P class="V">R$ 00,00 </p>
                <div class="linha"></div>
                <p class="C">TOTAL</p>
                <p class="V">R$ {{$valorTotal}},00 </p>
                <form action="{{route('carrinho.finalizar-pedido')}}">
                    @csrf
                    <button class="B" type="submit">Finalizar Compra</button>
                </form>

            
            </div>
        </div>
    </main>
    <div class="footer">
        <nav class="rodape">
            <ul>
                <li><img class="foto" src="/imagens/LOGO2.png" alt=""></li>
                <li><a href="enviado">Enviado</a></li>
                <li><a href="pedido">Aconpanhe seu pedido</a> </li>
                <li><a href="faleconosco">Fale Conosco</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>