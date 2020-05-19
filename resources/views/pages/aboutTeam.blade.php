<!DOCTYPE html>
    <head>
        <meta charset = "UTF-8">
        <title>Admin - Equipe</title>
        <link href="../css/admin-styles.css" rel="stylesheet">
    </head>
    <body>

        <div class="container">
           @component('pages.sidebar')
           @endcomponent


            <form class="containerContentHeader" method="post" action="{{ route('admin_about_team') }}">
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

                </div>

                <div class="titleBox" style="margin-top: 5vh;">
                    <p class="titleSection">Seção 1</p>
                    <div class="preview" onclick="mostrarModal('modalSection1')">Ver Componente</div>
                </div>
                <div class="contentHead">

                    <div class="box" style="margin-bottom: 25px">
                        <p>Frase Subtitulo 1:</p>
                        <input type="text" name="tituloImagem" value="{{$dados->tituloImagem}}" />
                    </div>

                    <div class="box" style="margin-bottom: 25px">
                        <p>Frase Subtitulo 2:</p>
                        <input type="text" name="subtituloImagem" value="{{$dados->subtituloImagem}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 25px">
                        <p>Texto lado Esquerdo:</p>
                        <input type="text" name="desc1" value="{{$dados->desc1}}" />
                    </div>

                    <div class="box" style="margin-bottom: 25px">
                        <p>Texto Lado Direito:</p>
                        <input type="text" name="desc2" value="{{$dados->desc2}}" />
                    </div>

                    <div class="mini4BoxContainer">

                        <div class="mini4Box">
                            <p>1º Descrição:</p>
                            <input type="text" placeholder="" name="descdado1" value="{{$dados->descdado1}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>2º Descrição:</p>
                            <input type="text" placeholder="" name="descdado2" value="{{$dados->descdado2}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>3º Descrição:</p>
                            <input type="text" placeholder="" name="descdado3" value="{{$dados->descdado3}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>4º Descrição:</p>
                            <input type="text" placeholder="" name="descdado4" value="{{$dados->descdado4}}" />
                        </div>

                        <div class="mini4Box">
                            <p>1º Valor:</p>
                            <input type="text" placeholder="" name="dado1" value="{{$dados->dado1}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>2º Valor:</p>
                            <input type="text" placeholder="" name="dado2" value="{{$dados->dado2}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>3º Valor:</p>
                            <input type="text" placeholder="" name="dado3" value="{{$dados->dado3}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>4º Valor:</p>
                            <input type="text" placeholder="" name="dado4" value="{{$dados->dado4}}" />
                        </div>

                        <div class="box" style="margin-bottom: 25px">
                            <p>Imagem de fundo:</p>
                            <input type="text" name="imagem" value="{{$dados->imagem}}" />
                        </div>
                      </div>
                    </div>


                        <div class="titleBox" style="margin-bottom: 15px;">
                            <p class="titleSection">Configurações de Contato</p>
                            <div class="preview" onclick="mostrarModal('modalContact')">Ver Componente</div>
                        </div>
                        <div class="contentHead">

                            <div class="box">
                                <p>Titulo:</p>
                                <input type="text" name="contatoTitulo" value="{{$dados->contatoTitulo}}"/>
                            </div>

                            <div class="box" style="margin-bottom: 35px;">
                                <p>Descrição:</p>
                                <input type="text" name="contatodesc" value="{{$dados->contatodesc}}"/>
                            </div>
                        </div>
                        <button class="submitButton" type="submit">Enviar</button>

                </form>
           </div>

        </div>


        <div id="modalTitle" class="modal">
            <img src="../img/exmaples/aboutTeam/titleExample.png" alt="Header">
            <p onclick="mostrarModal('modalTitle')">Fechar</p>
        </div>
        <div id="modalSection1" class="modal" style="margin-top: 50vh !important">
            <img src="../img/exmaples/aboutTeam/section1Example.png" >
            <p onclick="mostrarModal('modalSection1')">Fechar</p>
        </div>
        <div id="modalContact" class="modal" style="margin-top: 130vh !important">
            <img src="../img/exmaples/aboutTeam/contactExample.png" >
            <p onclick="mostrarModal('modalContact')">Fechar</p>
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
