<!DOCTYPE html>
    <head>
        <meta charset = "UTF-8">
        <title>Admin - Galeria</title>
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


            <form class="containerContentHeader" method="post" action="{{ route('admin_about_team') }}">

                <div class="titleBox" style="margin-bottom: 15px;">
                    <p class="titleSection">Configurações de Titulo</p>
                    <div class="preview" onclick="mostrarModal('modalTitle')">Ver Componente</div>
                </div>
                <div class="contentHead">

                    <div class="box">
                        <p>Titulo da página:</p>
                        <input type="text" name="titulo" value="{{$dados->titulo}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Titulo:</p>
                        <input type="text" name="titulo2" value="{{$dados->titulo2}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Subtítulo:</p>
                        <input type="text" name="subtitulo" value="{{$dados->subtitulo}}"/>
                    </div>
                </div>
                <button class="submitButton" type="submit">Atualizar</button>

                <div class="titleBox" style="margin-bottom: 15px;">
                    <p class="titleSection">Imagens da Galeria</p>
                    <a class="preview" style="text-decoration: none"href="{{route('ImagemCreate')}}">Nova Imagem</a>
                </div>

                <table class="table">

                    <thead class="thead w3-table w3-striped w3-bordered">
                        <th scope="col">#</th>
                        <th>Titulo</th>
                        <th>Criado em</th>
                        <th style="text-align: center">Ver</th>
                        <th style="text-align: center">Editar</th>
                        <th style="text-align: center">Remover</th>
                    </thead>

                    @foreach( $imagens as $imagem)

                        <tr>
                            <td ></td>
                            <td >{{ $imagem->nome }}</td>
                            {{csrf_field()}}
                            <td >{{ $imagem->created_at }}</td>
                            <td style="text-align: center"><a target='_blank' href="{{$imagem->link}}"><i
                                        class="fa fa-eye" style="font-size:24px; color:#000;"></i></a></td>
                            <td style="text-align: center"><a href="{{route('ImagemEditor', $imagem->id)}}"><i
                                        class="fas fa-edit" style="font-size:24px;color:black; "></i></a></td>
                            <td style="text-align: center"><a href="{{route('ImagemDelete', $imagem->id)}}"><i
                                        class='fas fa-minus' style="font-size:24px;color:black;"></i></a></td>
                        </tr>
                    @endforeach
                </table>


            </form>
        </div>


        <div id="modalTitle" class="modal">
            <img src="img/examples/gallery/title.png" style="width:80vw; height:40vh; align-self: center" alt="Header">
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
</html>
