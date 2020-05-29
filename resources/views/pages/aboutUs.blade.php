<!DOCTYPE html>
    <head>
        <meta charset = "UTF-8">
        <title>Admin - Sobre Nós</title>
        <link href="../css/admin-styles.css" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


    </head>
    <body>

        <div style="display: flex; flex:1; background-color: #C3BFBC;">

           @component('pages.sidebar')
           @endcomponent


            <form class="containerContentHeader" method="post" action="{{ route('admin_about_us') }}">

                <div class="titleBox" style="margin-bottom: 15px;">
                    <p class="titleSection">Configurações de Titulo</p>
                    <div class="preview" onclick="mostrarModal('modalTitle')">Ver Componente</div>
                </div>
                <div class="contentHead">

                    <div class="box">
                        <p>Titulo:</p>
                        <input type="text" name="titulo" value="{{$dados->titulo}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Titulo:</p>
                        <input type="text" name="subtitulo" value="{{$dados->subtitulo}}"/>
                    </div>
                </div>

                <div class="titleBox" style="margin-bottom: 10px;">
                    <p class="titleSection">Configurações de Descrição</p>
                    <div class="preview" onclick="mostrarModal('modalDescription')">Ver Componente</div>
                </div>
                <div class="contentHead">

                    <div class="box">
                        <p>Titulo da descrição:</p>
                        <input type="text" name="titulo2" value="{{$dados->titulo2}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 10px;">
                        <p>Subtítulo da Descrição::</p>
                        <input type="text" name="subtitulo2" value="{{$dados->subtitulo2}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 10px;">
                        <p>Descrição:</p>
                        <textarea class="boxTextarea" name="sobre" >{{$dados->sobre}}</textarea>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Imagem do Video:</p>
                        <input type="text" name="imagem" value="{{$dados->imagem}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Link do Video:</p>
                        <input type="text" name="video" value="{{$dados->video}}"/>
                    </div>
                </div>

                <div class="titleBox" style="margin-bottom: 10px;">
                    <p class="titleSection">Seção 1</p>
                    <div class="preview" onclick="mostrarModal('modalSection1')">Ver Componente</div>
                </div>
                <div class="contentHead">
                    <div class="mini3BoxContainer">
                        <div class="mini3Box" style="margin-top: 35px;">
                            <p>Título 1:</p>
                            <input type="text" name="dado1" value="{{$dados->dado1}}"/>
                        </div>

                        <div class="mini3Box" style="margin-top: 35px;">
                            <p>Título 2</p>
                            <input type="text" name="dado2" value="{{$dados->dado2}}"/>
                        </div>


                        <div class="mini3Box" style="margin-top: 35px;">
                            <p>Titulo 3:</p>
                            <input type="text" name="dado3" value="{{$dados->dado3}}"/>
                        </div>

                        <div class="mini3Box">
                            <p>Descrição 1:</p>
                            <input type="text" name="descdado1" value="{{$dados->descdado1}}"/>
                        </div>

                        <div class="mini3Box">
                            <p>Descrição 2:</p>
                            <input type="text" name="descdado2" value="{{$dados->descdado2}}"/>
                        </div>
                        <div class="mini3Box">
                            <p>Descrição 3:</p>
                            <input type="text" name="descdado3" value="{{$dados->descdado3}}"/>
                        </div>
                    </div>
                    <div class="box" style="margin-bottom: 35px;">
                        <p>Imagem de plano de Fundo:</p>
                        <input type="text" name="imagemdesc" value="{{$dados->imagemdesc}}"/>
                    </div>
                </div>

                <div class="titleBox" style="margin-bottom: 10px;">
                    <p class="titleSection">Seção 2</p>
                    <div class="preview" onclick="mostrarModal('modalSection2')">Ver Componente</div>
                </div>
                <div class="contentHead">

                    <div class="box" style="margin-bottom: 15px;">
                        <p>Titulo:</p>
                        <input type="text" name="titulo3" value="{{$dados->titulo3}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 15px;">
                        <p>Subtitulo:</p>
                        <input type="text" name="subtitulo3" value="{{$dados->subtitulo3}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Descrição 1:</p>
                        <input type="text" name="descesq" value="{{$dados->descesq}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Descrição 2:</p>
                        <input type="text" name="descdir" value="{{$dados->descdir}}"/>
                    </div>

                    <div class="mini4BoxContainer">

                        <div class="mini4Box">
                            <p>1º Descrição:</p>
                            <input type="text" placeholder="" name="descestatistica1" value="{{$dados->descestatistica1}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>2º Descrição:</p>
                            <input type="text" placeholder="" name="descestatistica2" value="{{$dados->descestatistica2}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>3º Descrição:</p>
                            <input type="text" placeholder="" name="descestatistica3" value="{{$dados->descestatistica3}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>4º Descrição:</p>
                            <input type="text" placeholder="" name="descestatistica4" value="{{$dados->descestatistica4}}" />
                        </div>

                        <div class="mini4Box">
                            <p>1º Valor:</p>
                            <input type="text" placeholder="" name="estatistica1" value="{{$dados->estatistica1}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>2º Valor:</p>
                            <input type="text" placeholder="" name="estatistica2" value="{{$dados->estatistica2}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>3º Valor:</p>
                            <input type="text" placeholder="" name="estatistica3" value="{{$dados->estatistica3}}"/>
                        </div>

                        <div class="mini4Box" style="margin-bottom: 30px;">
                            <p>4º Valor:</p>
                            <input type="text" placeholder="" name="estatistica4" value="{{$dados->estatistica4}}" />
                        </div>
                    </div>
                </div>

                <div class="titleBox" style="margin-bottom: 10px;">
                    <p class="titleSection">Entre em Contato</p>
                    <div class="preview" onclick="mostrarModal('modalContact')">Ver Componente</div>
                </div>
                <div class="contentHead">

                    <div class="box" style="margin-bottom: 15px;">
                        <p>Titulo:</p>
                        <input type="text" name="titulocontato" value="{{$dados->titulocontato}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 15px;">
                        <p>Horário de Atendimento:</p>
                        <input type="text" name="atendimento" placeholder="Mon – Fri 09:00-17:00" value="{{$dados->atendimento}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 15px;">
                        <p>Telefone:</p>
                        <input type="text" name="telefone" value="{{$dados->telefone}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 15px;">
                        <p>E-mail:</p>
                        <input type="text" name="email" value="{{$dados->email}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 15px;">
                        <p>Imagem de Fundo:</p>
                        <input type="text" name="imagemcontato" value="{{$dados->imagemcontato}}"/>
                    </div>
                </div>
                <div class="titleBox" style="margin-bottom: 10px;">
                    <p class="titleSection">Perguntas Frequentes</p>
                    <div class="preview" onclick="mostrarModal('modalFAQ')">Ver Componente</div>
                </div>
                <div class="contentHead">

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Imagem de fundo:</p>
                        <input type="text" name="imagemfaq" value="{{$dados->imagemfaq}}"/>
                    </div>
                </div>

                <button class="submitButton" type="submit">Atualizar</button>

                <div class="titleBox" style="margin-bottom: 15px;">
                    <p class="titleSection">Perguntas</p>
                    <a class="preview" style="text-decoration: none"href="{{route('faqCreate')}}">Nova Pergunta</a>
                </div>

                <table class="table">

                    <thead class="thead w3-table w3-striped w3-bordered">
                        <th scope="col">#</th>
                        <th>Pergunta</th>
                        <th>Resposta</th>
                        <th style="text-align: center">Editar</th>
                        <th style="text-align: center">Remover</th>
                    </thead>

                    @foreach( $faqs as $faq)
                        <tr style="text-transform:capitalize;">
                            <td></td>
                            <td>{{ $faq->pergunta }}</td>
                            <td>{{ $faq->resposta }}</td>
                            {{csrf_field()}}
                            <td style="text-align: center"><a href="{{route('faqEditor', $faq->id)}}"><i
                                        class="fas fa-edit" style="font-size:24px;color:black; "></i></a></td>
                            <td style="text-align: center"><a href="{{route('faqDelete', $faq->id)}}"><i
                                        class='fas fa-minus' style="font-size:24px;color:black;"></i></a></td>
                        </tr>
                    @endforeach
                </table>


            </form>
        </div>


        <div id="modalTitle" class="modal">
            <img src="img\examples\aboutUs\title.png" alt="Header">
            <p onclick="mostrarModal('modalTitle')">Fechar</p>
        </div>
        <div id="modalDescription" class="modal">
            <img src="img\examples\aboutUs\description.png" alt="Descrição">
            <p onclick="mostrarModal('modalDescription')">Fechar</p>
        </div>
        <div id="modalSection1" class="modal" style="margin-top: 90vh">
            <img src="img\examples\aboutUs\section1.png" alt="Header">
            <p onclick="mostrarModal('modalSection1')">Fechar</p>
        </div>
        <div id="modalSection2" class="modal" style="margin-top: 180vh" >
            <img src="img\examples\aboutUs\section2.png" alt="Header">
            <p onclick="mostrarModal('modalSection2')">Fechar</p>
        </div>
        <div id="modalContact" class="modal" style="margin-top: 210vh">
            <img src="img\examples\aboutUs\contact.png" alt="Header">
            <p onclick="mostrarModal('modalContact')">Fechar</p>
        </div>
        <div id="modalFAQ" class="modal" style="margin-top: 260vh">
            <img src="img\examples\aboutUs\faq.png" alt="Header">
            <p onclick="mostrarModal('modalFAQ')">Fechar</p>
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
