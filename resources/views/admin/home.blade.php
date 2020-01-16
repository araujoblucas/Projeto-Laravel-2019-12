<!DOCTYPE html>
<html>
<head>

    <script src="https://cdn.ckeditor.com/4.13.1/standard-all/ckeditor.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

<style>
    h5 {
        font-family: Roboto;
    }
</style>


</head>
<body>
@component('admin.adminHead')
@endcomponent

<div class="container bg-light" style="margin-top: 20px;border-radius: 10px">
    <div id="form-container" class="container">
        <form method="post" action="{{route('admin_home')}}">

            <h1 class="display-3">Home<hr class="mb-4"></h1>
            <br>
            <h1 class="display-4">Container 1<hr class="mb-4"></h1>
            <div class="form-group">
                <label ><h5>Título</h5></label>
                <input type="text" name="container1titulo" class="form-control" value="{{$dados->container1titulo}}" >
            </div>

            <div class="form-group">
                <label ><h5>Subtítulo</h5></label>
                <input type="text" name="container1subtitulo" class="form-control" value="{{$dados->container1subtitulo}}" >
            </div>

            <div class="form-group">
                <label ><h5>Descrição</h5></label>
                <input type="text" name="container1descricao" class="form-control" value="{{$dados->container1descricao}}">
            </div>

            <div class="form-group">
                <label ><h5>Imagem</h5></label>
                <input type="text" name="container1imagem" placeholder="18000x1000" class="form-control" value="{{$dados->container1imagem}}">
            </div>

            <hr>

            <div class="form-group">
                <label ><h5>Título 2</h5></label>
                <input type="text" name="container1titulo2" class="form-control" value="{{$dados->container1titulo2}}" >
            </div>

            <div class="form-group">
                <label ><h5>Subtítulo 2</h5></label>
                <input type="text" name="container1subtitulo2" class="form-control" value="{{$dados->container1subtitulo2}}">
            </div>

            <div class="form-group">
                <label ><h5>Descrição 2</h5></label>
                <input type="text" name="container1descricao2"  class="form-control" value="{{$dados->container1descricao2}}">
            </div>

            <div class="form-group">
                <label ><h5>Imagem 2</h5></label>
                <input type="text" name="container1imagem2" placeholder="18000x1000" class="form-control" value="{{$dados->container1imagem2}}">
            </div>

            <br><br><h1 class="display-4">Container 2<hr class="mb-4"></h1>

            <div class="form-group">
                <label ><h5>Titulo</h5></label>
                <input type="text" name="container2titulo" class="form-control" value="{{$dados->container2titulo}}">
            </div>

            <div class="form-group">
                <label ><h5>Descrição</h5></label>
                <textarea name="container2descricao" id="editor1" class="form-control">
                    {{$dados->container2descricao}}
                </textarea>
            </div>

            <div class="form-group">
                <label ><h5>Imagem</h5></label>
                <input type="text" name="container2imagem" placeholder="900x729" class="form-control" value="{{$dados->container2imagem}}">
            </div>

            <br><br><h1 class="display-4">Container 3<hr class="mb-4"></h1>

            <div class="form-group">
                <label ><h5>Titulo</h5></label>
                <input type="text" name="container3titulo" class="form-control" value="{{$dados->container3titulo}}" >
            </div>

            <div class="form-group">
                <label ><h5>Subtitulo</h5></label>
                <input type="text" name="container3subtitulo" class="form-control" value="{{$dados->container3subtitulo}}" >
            </div>

            <table class="table" style="width:100%;margin-top: 20px;">
                <thead class="bg-secondary">
                <th>#</th>
                <th>Icone</th>
                <th>Titulo</th>
                <th>Descrição</th>
                </thead>
                @for($i = 1;$i < 7; $i++)
                    <tr>
                        <td>{{$i}}</td>
                        <td><input type="text" name="container3icone{{$i}}" class="form-control" value="<?php $x = 'container3icone'.$i ?>{{$dados->$x}}"></td>
                        <td><input type="text" name="container3titulo{{$i}}" class="form-control" value="<?php $y = 'container3titulo'.$i ?>{{$dados->$y}}"></td>
                        <td><input type="text" name="container3descricao{{$i}}" class="form-control" value="<?php $z = 'container3descricao'.$i ?>{{$dados->$z}}"></td>
                    </tr>
                @endfor
            </table>

            <br><br><h1 class="display-4">Container 4<hr class="mb-4"></h1>

            <div class="form-group">
                <label ><h5>Titulo</h5></label>
                <input type="text" name="container4titulo" class="form-control" value="{{$dados->container4titulo}}">
            </div>

            <div class="form-group">
                <label ><h5>Texto do Link</h5></label>
                <input type="text" name="container4link" class="form-control" value="{{$dados->container4link}}">
            </div>

            <div class="form-group">
                <label ><h5>Imagem</h5></label>
                <input type="text" name="container4imagem" class="form-control" placeholder="1800x1000" value="{{$dados->container4imagem}}">
            </div>

            <br><br><h1 class="display-4">Container 5<hr class="mb-4"></h1>

            <div class="form-group">
                <label ><h5>Titulo</h5></label>
                <input type="text" name="container5titulo" class="form-control" value="{{$dados->container5titulo}}" >
            </div>

            <div class="form-group">
                <label ><h5>Descrição</h5></label>
                <input type="text" name="container5descricao" class="form-control" value="{{$dados->container5descricao}}" >
            </div>

            @for($i = 1; $i < 4; $i++)
            <div class="row">
                <div class="col">
                    <label><h5>Titulo do Quadro {{$i}}</h5></label>
                    <input type="text" name="container5titulo{{$i}}" class="form-control" value="<?php $x='container5titulo'.$i ?>{{$dados->$x}}">
                </div>
                <div class="col">
                    <label><h5>Descrição do Quadro {{$i}}</h5></label>
                    <input type="text" name="container5descricao{{$i}}" class="form-control" value="<?php $y='container5descricao'.$i ?>{{$dados->$y}}">
                </div>
                <div class="col">
                    <label><h5>Icone do Quadro {{$i}}</h5></label>
                    <input type="text" name="container5icone{{$i}}" class="form-control" value="<?php $z='container5icone'.$i ?>{{$dados->$z}}">
                </div>
                <div class="col">
                    <label><h5>Imagem de Fundo {{$i}}</h5></label>
                    <input type="text" name="container5background{{$i}}" placeholder="398x370" class="form-control" value="<?php $w='container5background'.$i ?>{{$dados->$w}}">
                </div>
            </div>
            <br>
            @endfor

            <br><br><h1 class="display-4">Container 6<hr class="mb-4"></h1>
            <div class="form-group">
                <label ><h5>Imagem de Fundo dos Comentários de Clientes</h5></label>
                <input type="text" name="container6imagem" placeholder="1840x100" class="form-control" value="{{$dados->container6imagem}}">
            </div>


            <button class="btn btn-primary black" type="submit">Atualizar</button>
        </form>



        <br>
        <h1 class="display-4">Comentários<hr class="mb-4"></h1>
        <table class="table" style="width:100%;margin-top: 20px;">

            <thead class="thead-dark">
            <th scope="col">#</th>
            <th>Nome</th>
            <th>Ocupação</th>
            <th style="text-align: center">Editar</th>
            <th style="text-align: center">Remover</th>
            </thead>

            @foreach($comments as $comment)

                <tr style="text-transform:capitalize;">
                    <td scope="row"></td>
                    <td scope="row">{{ $comment->nome }}</td>
                    {{csrf_field()}}
                    <td scope="row">{{ $comment->ocupacao }}</td>
                    <td scope="row" style="text-align: center"><a href="{{route('commentEditor', $comment->id)}}"><i
                                class="fas fa-edit" style="font-size:24px;color:black; "></i></a></td>
                    <td scope="row" style="text-align: center"><a href="{{route('commentDelete', $comment->id)}}"><i
                                class='fas fa-minus' style="font-size:24px;color:black;"></i></a></td>
                </tr>
            @endforeach
        </table>
        <a href="{{route('commentCreate')}}"><button class="btn btn-secondary bg-dark" type="submit" style="float:right;">Novo Comentário</button></a>
        <br><br><br>

    </div>

</div>


<script>
    CKEDITOR.replace( 'editor1', {

        }
    );
</script>


<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
