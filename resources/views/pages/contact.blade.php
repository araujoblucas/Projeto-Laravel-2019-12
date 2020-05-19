<!DOCTYPE html>
    <head>
        <meta charset = "UTF-8">
        <title>Admin - Contato</title>
        <link href="../css/admin-styles.css" rel="stylesheet">
    </head>
    <body>

        <div class="container">

           @component('pages.sidebar')
           @endcomponent

            <form class="containerContentHeader" method="post" action="{{ route('admin_contact') }}">
                <div class="titleBox">
                    <p class="titleSection">Configurações de Título</p>
                    <div class="preview" onclick="mostrarModal('modalTitle')">Ver Componente</div>
                </div>
                <div class="contentHead">

                    <div class="box">
                        <p>Titulo:</p>
                        <input type="text" name="titulo" value="{{$dados->titulo}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Subtitulo:</p>
                        <input type="text" name="subtitulo" value="{{$dados->subtitulo}}"/>
                    </div>


                    <div class="box" style="margin-bottom: 35px;">
                        <p>Imagem de Fundo:</p>
                        <input type="text" name="imagem" value="{{$dados->imagem}}"/>
                    </div>
                </div>

                <div class="titleBox">
                    <p class="titleSection">Formas de Contato</p>
                    <div class="preview" onclick="mostrarModal('modalWays')">Ver Componente</div>
                </div>

                <div class="contentHead">
                    <div class="mini3BoxContainer">
                        <div class="mini3Box" style="margin-top: 35px;">
                            <p>Telefone:</p>
                            <input type="text" name="telefone" value="{{$dados->telefone}}"/>
                        </div>

                        <div class="mini3Box" style="margin-top: 35px;">
                            <p>Email</p>
                            <input type="text" name="email" value="{{$dados->email}}"/>
                        </div>


                        <div class="mini3Box" style="margin-top: 35px;">
                            <p>Link para Localização:</p>
                            <input type="text" name="linklocalizacao" value="{{$dados->linklocalizacao}}"/>
                        </div>

                        <div class="mini3Box" style="margin-bottom: 35px;">
                            <p>Descrição Telefone:</p>
                            <input type="text" name="desctelefone" value="{{$dados->desctelefone}}"/>
                        </div>

                        <div class="mini3Box" style="margin-bottom: 35px;">
                            <p>Descrição Email:</p>
                            <input type="text" name="descemail" value="{{$dados->descemail}}"/>
                        </div>


                        <div class="mini3Box" style="margin-bottom: 35px;">
                            <p>Descrição Localização:</p>
                            <input type="text" name="localizacao" value="{{$dados->localizacao}}"/>
                        </div>
                    </div>
                </div>

                <div class="titleBox">
                    <p class="titleSection">Redes Sociais</p>
                    <div class="preview" onclick="mostrarModal('modalSocial')">Ver Componente</div>
                </div>
                <div class="contentHead">

                    <div class="box">
                        <p>Título:</p>
                        <input type="text" name="messagetitulo" value="{{$dados->messagetitulo}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Subtitulo:</p>
                        <input type="text" name="messagedesc" value="{{$dados->messagedesc}}"/>
                    </div>
                    <div class="mini4BoxContainer">

                        <div class="mini4Box">
                            <p>Facebook:</p>
                            <input type="text" placeholder="" name="facebook" value="{{$dados->facebook}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>Google:</p>
                            <input type="text" placeholder="" name="google" value="{{$dados->google}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>Skype:</p>
                            <input type="text" placeholder="" name="skype" value="{{$dados->skype}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>Twitter:</p>
                            <input type="text" placeholder="" name="twitter" value="{{$dados->twitter}}" />
                        </div>
                    </div>
                </div>

                        <button class="submitButton" type="submit">Enviar</button>

                </form>
           </div>

        </div>


        <div id="modalTitle" class="modal">
            <img src="../img/exmaples/contact/titleExample.png" alt="Header">
            <p onclick="mostrarModal('modalTitle')">Fechar</p>
        </div>
        <div id="modalWays" class="modal" style="margin-top: 50vh !important">
            <img src="../img/exmaples/contact/waysExample.png" alt="Ways">
            <p onclick="mostrarModal('modalWays')">Fechar</p>
        </div>
        <div id="modalSocial" class="modal" style="margin-top: 100vh !important">
            <img src="../img/exmaples/contact/socialExample.png" alt="Social">
            <p onclick="mostrarModal('modalSocial')">Fechar</p>
        </div>

    </body>
    <script>

        function mostrarModal(modal){
            console.log(modal);
            let modelo = document.getElementById(modal);
            console.log(modelo);
            modelo.classList.toggle("toggleModal");
        }
    </script>
</html>
