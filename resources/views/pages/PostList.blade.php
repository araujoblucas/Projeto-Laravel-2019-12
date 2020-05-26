<!DOCTYPE html>
    <head>
        <meta charset = "UTF-8">
        <title>Admin - Lista de Posts</title>
        <link href="../../css/admin-styles.css" rel="stylesheet">



        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


    </head>
    <body>

        <div style="display: flex; flex:1; background-color: #C3BFBC;">

           @component('pages.sidebar')
           @endcomponent


            <form class="containerContentHeader" method="post">

                <div class="titleBox" style="margin-bottom: 15px;">
                    <p class="titleSection">Lista de Posts</p>
                    <a class="preview" style="text-decoration: none" href="{{ route('PostCreator') }}">Criar Post</a>
                </div>
                <table class="table">

                    <thead class="thead w3-table w3-striped w3-bordered">
                        <th>#</th>
                        <th>Titulo</th>
                        <th>Criado em</th>
                        <th style="text-align: center">Ver</th>
                        <th style="text-align: center">Editar</th>
                        <th style="text-align: center">Remover</th>
                    </thead>


                    @foreach( $posts as $post)

                    <tr style="text-transform:capitalize;">
                        <td scope="row"></td>
                        <td scope="row">{{ $post->titulo }}</td>
                        {{csrf_field()}}
                        <td scope="row">{{ $post->created_at }}</td>
                        <td scope="row" style="text-align: center"><a href="{{route('AdminPostShow', $post->id)}}"><i class='fas fa-eye' style="font-size:24px;color:black;"></i></a></td>
                        <td scope="row" style="text-align: center"><a href="{{route('PostEditor', $post->id)}}"><i class="fas fa-edit" style="font-size:24px;color:black; "></i></a></td>
                        <td scope="row" style="text-align: center"><a href="{{route('postDelete', $post->id)}}"><i class='fas fa-minus' style="font-size:24px;color:black;"></i></a></td>

                    </tr>
                @endforeach
                </table>


            </form>
        </div>
    </body>
</html>
