<!DOCTYPE html>
    <head>
        <meta charset = "UTF-8">
        <title>Admin - Home</title>
        <link href="../css/admin-styles.css" rel="stylesheet">
        <script src="https://cdn.ckeditor.com/4.13.1/standard-all/ckeditor.js"></script>


        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


    </head>
    <body>

        <div style="display: flex; flex:1; background-color: #C3BFBC;">

           @component('pages.sidebar')
           @endcomponent


            <form class="containerContentHeader" method="post" action="{{route('admin_home')}}">

                <div class="titleBox" style="margin-bottom: 15px;">
                    <p class="titleSection">Configurações de Titulo</p>
                    <div class="preview" onclick="mostrarModal('modalContact')">Ver Componente</div>
                </div>
                <div class="contentHead">

                    <div class="box">
                        <p>Titulo:</p>
                        <input type="text" name="container1titulo" value="{{$dados->container1titulo}}"/>
                    </div>

                    <div class="box">
                        <p>Titulo da Segunda Imagem:</p>
                        <input type="text" name="container1titulo2" value="{{$dados->container1titulo2}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Subtítulo:</p>
                        <input type="text" name="container1subtitulo" value="{{$dados->container1subtitulo}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Subtítulo da Segunda Imagem:</p>
                        <input type="text" name="container1subtitulo2" value="{{$dados->container1subtitulo2}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Descrição:</p>
                        <input type="text" name="container1descricao" value="{{$dados->container1descricao}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Descrição da Segunda Imagem:</p>
                        <input type="text" name="container1descricao2" value="{{$dados->container1descricao2}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Plano de Fundo:</p>
                        <input type="text" name="container1imagem" value="{{$dados->container1imagem}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Plano de Fundo da Segunda Imagem:</p>
                        <input type="text" name="container1imagem2" value="{{$dados->container1imagem2}}"/>
                    </div>
                </div>

                <div class="titleBox" style="margin-bottom: 15px;">
                    <p class="titleSection">Configurações da Seção de Descrição</p>
                    <div class="preview" onclick="mostrarModal('modalContact')">Ver Componente</div>
                </div>

                <div class="contentHead">

                    <div class="box">
                        <p>Titulo:</p>
                        <input type="text" name="container2titulo" value="{{$dados->container2titulo}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Subtítulo:</p>
                        <input type="text" name="container1subtitulo" value="{{$dados->container1subtitulo}}"/>
                    </div>

                    <textarea name="container2descricao" id="editor1" >
                        {{$dados->container2descricao}}
                    </textarea>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Plano de Fundo:</p>
                        <input type="text" name="container2imagem" value="{{$dados->container2imagem}}"/>
                    </div>
                </div>


                <div class="titleBox" style="margin-bottom: 15px;">
                    <p class="titleSection">Seçãp dos Icones</p>
                    <div class="preview" onclick="mostrarModal('modalContact')">Ver Componente</div>
                </div>

                <div class="contentHead">

                    <div class="box">
                        <p>Titulo:</p>
                        <input type="text" name="container3titulo" value="{{$dados->container3titulo}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Subtítulo:</p>
                        <input type="text" name="container3subtitulo" value="{{$dados->container3subtitulo}}"/>
                    </div>

                    <table class="table1">

                        <thead class="thead w3-table w3-striped w3-bordered">
                            <th>#</th>
                            <th>Icone</th>
                            <th>Titulo</th>
                            <th>Descrição</th>
                        </thead>


                        @for($i = 1;$i < 7; $i++)

                        <tr style="text-transform:capitalize;">
                            <td>{{$i}}</td>
                            <td><input size="23" type="text" name="container3icone{{$i}}"  value="<?php $x = 'container3icone'.$i ?>{{$dados->$x}}"></td>
                            <td><input type="text" name="container3titulo{{$i}}"  value="<?php $y = 'container3titulo'.$i ?>{{$dados->$y}}"></td>
                            <td><input type="text" name="container3descricao{{$i}}"  value="<?php $z = 'container3descricao'.$i ?>{{$dados->$z}}"></td>
                        </tr>
                        @endfor
                    </table>
                </div>

                <div class="titleBox" style="margin-bottom: 15px;">
                    <p class="titleSection">Seção de Parceiros</p>
                    <div class="preview" onclick="mostrarModal('modalContact')">Ver Componente</div>
                </div>

                <div class="contentHead">

                    <div class="box">
                        <p>Titulo:</p>
                        <input type="text" name="container4titulo" value="{{$dados->container4titulo}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 15px;">
                        <p>Subtítulo:</p>
                        <input type="text" name="container4link" value="{{$dados->container4link}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Plano de Fundo:</p>
                        <input type="text" name="container4imagem" value="{{$dados->container4imagem}}"/>
                    </div>
                </div>

                <div class="titleBox" style="margin-bottom: 15px;">
                    <p class="titleSection">Seção de Parceiros</p>
                    <div class="preview" onclick="mostrarModal('modalContact')">Ver Componente</div>
                </div>

                <div class="contentHead">

                    <div class="box">
                        <p>Titulo:</p>
                        <input type="text" name="container5titulo" value="{{$dados->container5titulo}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 15px;">
                        <p>Subtítulo:</p>
                        <input type="text" name="container5descricao" value="{{$dados->container5descricao}}"/>
                    </div>

                    @for($i = 1; $i < 4; $i++)

                    <div class="mini4BoxContainer">

                        <div class="mini4Box">
                            <p>Titulo {{$i}}:</p>
                            <input type="text" placeholder="" name="container5titulo{{$i}}" value="<?php $x='container5titulo'.$i ?>{{$dados->$x}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>Descrição {{$i}}:</p>
                            <input type="text" placeholder="" name="container5descricao{{$i}}" value="<?php $y='container5descricao'.$i ?>{{$dados->$y}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>Imagem de Fundo {{$i}}:</p>
                            <input type="text" placeholder="" name="container5background{{$i}}" value="<?php $w='container5background'.$i ?>{{$dados->$w}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>Icone {{$i}}</p>
                            <input type="text" placeholder="" name="container5icone{{$i}}" value="<?php $z='container5icone'.$i ?>{{$dados->$z}}" />
                        </div>
                      </div>
                    @endfor
                </div>


                <div class="titleBox" style="margin-bottom: 15px;">
                    <p class="titleSection">Configurações da Seção de Comentários</p>
                    <div class="preview" onclick="mostrarModal('modalContact')">Ver Componente</div>
                </div>

                <div class="contentHead">
                    <div class="box" style="margin-bottom: 35px;">
                        <p>Plano de Fundo:</p>
                        <input type="text" name="container6imagem" value="{{$dados->container6imagem}}"/>
                    </div>
                </div>

                <button class="submitButton" type="submit">Enviar</button>

                <div class="titleBox" style="margin-bottom: 15px;">
                    <p class="titleSection">Comentários</p>
                    <a class="preview" style="text-decoration: none"href="{{route('commentCreate')}}">Novo Comentário</a>
                </div>

                <table class="table">

                    <thead class="thead w3-table w3-striped w3-bordered">
                        <th scope="col">#</th>
                        <th>Nome</th>
                        <th>Ocupação</th>
                        <th style="text-align: center">Editar</th>
                        <th style="text-align: center">Remover</th>
                    </thead>

                    @foreach($comments as $comment)
                    {{csrf_field()}}

                        <tr>
                            <td ></td>
                            <td >{{ $comment->nome }}</td>
                            {{csrf_field()}}
                            <td >{{ $comment->ocupacao }}</td>
                            <td style="text-align: center"><a href="{{route('commentEditor', $comment->id)}}"><i
                                        class="fas fa-edit" style="font-size:24px;color:black; "></i></a></td>
                            <td style="text-align: center"><a href="{{route('commentDelete', $comment->id)}}"><i
                                        class='fas fa-minus' style="font-size:24px;color:black;"></i></a></td>
                        </tr>
                    @endforeach
                </table>


            </form>
        </div>


        <div id="modalTitle" class="modal">
            <img src="../img/exmaples/aboutTeam/titleExample.png" alt="Header">
            <p onclick="mostrarModal('modalTitle')">Fechar</p>
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

<script>
    CKEDITOR.replace( 'editor1', {
        uiColor: '#C3BFBC',
        width: '60vw',
        padding: '10px',
        height: '35vh'
        }
    );
</script>
</html>
