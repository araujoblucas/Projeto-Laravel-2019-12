<!DOCTYPE html>
<html lang=”pt-br”>
    <head>
        <title>Login</title>
        <link href="styles.css" rel="stylesheet">
    </head>
    <style>

        @font-face {
            font-family: 'Post No Bills Jaffna Medium Regular';
            font-style: normal;
            font-weight: normal;
            src: local('Post No Bills Jaffna Medium Regular'), url('/fonts/PostNoBillsJaffna-Medium.woff') format('woff');
        }
        @font-face   {
            font-family: 'Prata';
            font-style: normal;
            font-weight: normal;
            src: local('Prata'), url('/fonts/Prata-Regular.woff') format('woff');
        }

                    /* RESET DAS CONFIG DO CSS*/
        ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color:#fff;
            opacity: 0.6;
            font-family: 'Prata', serif;
            font-size: 20px;
        }
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus {
            border:none;
            -webkit-text-fill-color: #fff;
            -webkit-box-shadow: 0 0 0px 1000px rgba(200,200,200, 0.9) inset;
            padding: 10px;
            width:100%;
            border-radius: 0px 12px 12px 0px;
            -moz-border-radius: 0px 12px 12px 0px;
            -webkit-border-radius: 0px 12px 12px 0px;
            transition: 99999999999999999s;
            color: #FFF;
            font-family: 'Prata', serif;
        }
        button {
            background: none;
            color: inherit;
            border: none;
            padding: 0;
            font: inherit;
            outline: inherit;
        }

        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        @keyframes gradient {
            0% {background-position: 0%}
            100% {background-position: 100%}
        }


        .container {
            display: flex;
            width: 100vw;
            height: 100vh;
            align-items: center;
            align-content: center;
            justify-content: center;
            background-color: #C3BFBC;
        }

        .boxLogin {
            display: flex;
            background: linear-gradient(156deg,#7d4361, #6b3250, #965b79, #4a1030);
            background-size: 600% 100%;
            animation: gradient 16s linear infinite;
            animation-direction: alternate;
            min-width: 30vw;
            height: 75vh;
            border-radius: 6px;
            align-content: center;
            align-items: center;
            flex-direction: column;
            color: #fff;
        }

        .title {
            margin-top: 45px;
            font-family:'Post No Bills Jaffna Medium Regular', Helvetica, sans-serif ;
            color: #fff;
            font-size: 3em;
            text-align: center;
            line-height: 50px;
            padding-left: 20px;
            padding-right: 20px;
        }

        .inputBox {
            width: 270px;
            height: 50px;
            margin-top: 40px;
            border-radius: 15px;
            background-color: rgba(196, 196, 196, 0.5);
            color: #fff;
            display:flex;
            flex-direction: row;
        }

        .inputBox + .inputBox {
            margin-top: 15px;
        }

        .inputInput {
            background-color: transparent;
            box-shadow: none;
            text-shadow: none;
            border: none;
            margin-left: 20px;
            height: 50px;
            color: #FFF;
            font-family: 'Prata', serif;

        }
            /** remove as bordas de quando selecionada **/
        input:focus{
            outline: none;
            height: 50px;
        }
        .inputIMG {
            height: 50px;
            margin-left: 15px;

        }
        .forgot {
            margin-top: 10px;
        }
        .forgot a {
            color: #fff;
            font-family: 'Prata', monospace;
            text-decoration: none;
        }

        .forgot:hover{
            opacity: 0.7;
            transition: linear 0.7s;
        }

        .buttons {
            background-color: #C3BFBC;
            width: 200px;
            height: 45px;
            border-radius: 12px;
            color: #fff;
            margin-top: 40px;
            font-family:'Post No Bills Jaffna Medium Regular', Helvetica, sans-serif ;
            font-size: 24px;
        }
        .buttons:hover{
            opacity: 0.7;
            transition: linear 0.5s;
        }

        button:focus {
            outline: none;
        }

        .errors {
            color: yellowgreen;
            margin-top: 20px;
            margin-bottom: 10px;

        }
    </style>
    <body>
        <div class="container">
            <form action="{{route('post_login')}}" method="post">
                <div class="boxLogin">
                    <div class="title">
                        Painel de <br>Administração
                    </div>

                    <div class="inputBox" >
                        <img src="icons/user.png" class="inputIMG" >
                        <input autocomplete="off" class="inputInput" name="email" required placeholder="Usuário"/>
                    </div>

                    <div class="inputBox" >
                        <img src="icons/lock.png" class="inputIMG" >
                        <input autocomplete="off" type="password" class="inputInput" name="password" required placeholder="Senha"/>
                    </div>
                    <div class="forgot">
                        <a href="">Problemas para entrar?</a>
                    </div>
                    <button type="submit" class="buttons">Entrar</button>
                    <div class="errors">
                        @foreach ($errors->all() as $message)
                            {{
                                $message
                            }}
                        @endforeach
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
