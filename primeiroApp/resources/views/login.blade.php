<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de cadastro e login</title>
    <link rel="stylesheet" href="{{asset('cssfile/login.css')}}">

    
    <script src="index.js"></script>
    <script type="text/javascript" src="public\javascript\index.js"></script>
    <script src="{{ asset('javascript/index.js') }}"></script>


    <script scrc="http://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="buttonsForm">
            <div class="btnColor"></div>
                <button id="btnSignin">Sign in</button>
                <button id="btnSignup">Sign up</button>
            </div>
            <form id="signin">
                <input type="text" placeholder="Nome" required/>
                <i class="fas fa-envelope Nome"></i>
                <input type="password" placeholder="Password" required/>
                <i class="fas fa-lock iPassword"></i>
                <div class="divCheck">
                    <input type="checkbox"/>
                    <span>Remember password</span>
                    
        </div>

        <button type="submit">Sign in</button>
        
</form>

<form id="signup">
    <input type="text" placeholder="Email" required/>
    <i class="fas fa-envelope iEmail"></i>
    <input type="password" placeholder="Password" required/>
    <i class="fas fa-lock iPassword2"></i>
    <div class="divCheck">
        <input type="checkbox" required/>
        <span>Terms</span>
        
</div>

<button type="submit">Sign up</button>
</form>

</div>

<img src="https://img.freepik.com/vetores-gratis/pessoas-de-ilustracao-plana-com-animais-de-estimacao_52683-65392.jpg?w=900&t=st=1686200960~exp=1686201560~hmac=ea835ec38c40a7035338c99624d81bb1268fe28491e4ab06d7736a491aabb12d"></img>
</body>
</html>