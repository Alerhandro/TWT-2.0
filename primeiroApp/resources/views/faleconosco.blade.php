<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TWT The World Tag</title>
    <link rel="stylesheet" href="{{asset('cssfile/fale.css')}}">
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
        <h1>Fale Conosco</h1>
        <div class="antedimento">
            <h2> Central de Atendimento </h2>
            <h2> Sac: +55xx xxxx-xxxx </h2>
            <h2> Horário de Funcionamento </h2>
            <h2 class="x"> Seg - xx as xx <br>
                Ter - xx as xx<br>
                Qua - xx as xx<br>
                Qui - xx as xx<br>
                Sex - xx as xx<br>
                Sab - xx as xx
            </h2>
            <div class="y">
                <div class="meu-box">
                    <input type="text" name="nomeCompleto" id="nomeCompleto" class="input-nome" placeholder="Nome e Sobrenome">
                    <label for="nomeCompleto" class="label-nome">Nome Completo*</label> <br>
                    <input type="text" name="nomeCompleto" id="nomeCompleto" class="input-nome" placeholder="exemple@mail.com">
                    <label for="nomeCompleto" class="label-nome">E-mail*</label> <br>
                    <input type="text" name="nomeCompleto" id="nomeCompleto" class="input-nome" placeholder="(DDD) Número de Telefone">
                    <label for="nomeCompleto" class="label-nome">Número Telefone*</label> <br>
                    <input type="text" name="nomeCompleto" id="nomeCompleto" class="input-nome" placeholder="Escolha um assunto">
                    <label for="nomeCompleto" class="label-nome">Assunto*</label> <br>
                    <input type="text" name="nomeCompleto" id="nomeCompleto" class="input-nome" placeholder="Tem alguma dúvida, Sugestão, reclamação ou elogio">
                    <label for="nomeCompleto" class="label-nome">Mensagem*</label>
                </div>
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