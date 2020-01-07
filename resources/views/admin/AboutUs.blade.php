<!DOCTYPE html>
<html>
<head>

    <script src="https://cdn.ckeditor.com/4.13.1/standard-all/ckeditor.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>




</head>
<?php
use App\AboutUs;
$dados = AboutUs::Find(1);
?>
<body>
@component('admin.adminHead')
@endcomponent

<div class="container" style="margin-top: 20px;">
    <div id="form-container" class="container">
        <form method="post" action="{{ route('admin_about_us') }}">
            <div class="form-group">
                <label for="exampleFormControlInput1"><h2>Titulo</h2></label>
                <input type="text" name="titulo" class="form-control" value="{{$dados->titulo}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Subtitulo</h4></label>
                <input type="text" name="subtitulo" class="form-control" value="{{$dados->subtitulo}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h2>Segundo Titulo</h2></label>
                <input type="text" name="titulo2" class="form-control" value="{{$dados->titulo2}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Segundo Subtitulo</h4></label>
                <input type="text" name="subtitulo2" class="form-control" value="{{$dados->subtitulo2}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Sobre</h4></label>
                <textarea name="sobre" class="form-control" rows="8">{{$dados->sobre}}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Video</h4></label>
                <input type="text" name="video" class="form-control" value="{{$dados->video}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Dado 1</h4></label>
                <input type="text" name="dado1" class="form-control" value="{{$dados->dado1}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Descrição do Dado 1</h4></label>
                <input type="text" name="descdado1" class="form-control" value="{{$dados->descdado1}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Dado 2</h4></label>
                <input type="text" name="dado2" class="form-control" value="{{$dados->dado2}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Descrição do Dado 2</h4></label>
                <input type="text" name="descdado2" class="form-control" value="{{$dados->descdado2}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Dado 3</h4></label>
                <input type="text" name="dado3" class="form-control" value="{{$dados->dado3}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Descrição do Dado 3</h4></label>
                <input type="text" name="descdado3" class="form-control" value="{{$dados->descdado3}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Imagem de fundo da descrição</h4></label>
                <input type="text" name="imagemdesc" class="form-control" placeholder="1518x499" value="{{$dados->imagemdesc}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Titulo 3</h4></label>
                <input type="text" name="titulo3" class="form-control" value="{{$dados->titulo3}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Subitulo 3</h4></label>
                <input type="text" name="subtitulo3" class="form-control" value="{{$dados->subtitulo3}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Descrição do lado esquerdo</h4></label>
                <input type="text" name="descesq" class="form-control" value="{{$dados->descesq}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Descrição do lado direito</h4></label>
                <input type="text" name="descdir" class="form-control" value="{{$dados->descdir}}">
            </div>


            <div class="row">
                <div class="col">
                    <label for="exampleFormControlInput1"><h5>Estatistica 1</h5></label>
                    <input type="text" name="estatistica1" class="form-control" value="{{$dados->estatistica1}}">
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1"><h5>Estatistica 2</h5></label>
                    <input type="text" name="estatistica2" class="form-control" value="{{$dados->estatistica2}}">
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1"><h5>Estatistica 3</h5></label>
                    <input type="text" name="estatistica3" class="form-control" value="{{$dados->estatistica3}}">
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1"><h5>Estatistica 4</h5></label>
                    <input type="text" name="estatistica4" class="form-control" value="{{$dados->estatistica4}}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="exampleFormControlInput1"><h5>Descrição da Estatistica 1</h5></label>
                    <input type="text" name="descestatistica1" class="form-control" value="{{$dados->descestatistica1}}">
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1"><h5>Descrição da Estatistica 2</h5></label>
                    <input type="text" name="descestatistica2" class="form-control" value="{{$dados->descestatistica2}}">
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1"><h5>Descrição da Estatistica 3</h5></label>
                    <input type="text" name="descestatistica3" class="form-control" value="{{$dados->descestatistica3}}">
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1"><h5>Descrição da Estatistica 4</h5></label>
                    <input type="text" name="descestatistica4" class="form-control" value="{{$dados->descestatistica4}}">
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Imagem para o fundo das Perguntas</h4></label>
                <input type="text" name="imagemfaq" class="form-control" value="{{$dados->imagemfaq}}" placeholder="1800x1043">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Pergunta 1</h4></label>
                <input type="text" name="ask1" class="form-control" value="{{$dados->ask1}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Resposta 1</h4></label>
                <input type="text" name="answer1" class="form-control" value="{{$dados->answer1}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Pergunta 2</h4></label>
                <input type="text" name="ask2" class="form-control" value="{{$dados->ask2}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Resposta 2</h4></label>
                <input type="text" name="answer2" class="form-control" value="{{$dados->answer2}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Pergunta 3</h4></label>
                <input type="text" name="ask3" class="form-control" value="{{$dados->ask3}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Resposta 3</h4></label>
                <input type="text" name="answer3" class="form-control" value="{{$dados->answer3}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Pergunta 4</h4></label>
                <input type="text" name="ask4" class="form-control" value="{{$dados->ask4}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Resposta 4</h4></label>
                <input type="text" name="answer4" class="form-control" value="{{$dados->answer4}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Pergunta 5</h4></label>
                <input type="text" name="ask5" class="form-control" value="{{$dados->ask5}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Resposta 5</h4></label>
                <input type="text" name="answer5" class="form-control" value="{{$dados->answer5}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Pergunta 6</h4></label>
                <input type="text" name="ask6" class="form-control" value="{{$dados->ask6}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Resposta 6</h4></label>
                <input type="text" name="answer6" class="form-control" value="{{$dados->answer6}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Imagem da sessão Entre em contato </h4></label>
                <input type="text" name="imagemcontato" class="form-control" placeholder="1800x826" value="{{$dados->imagemcontato}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Titulo da sessão de Contatos</h4></label>
                <input type="text" name="titulocontato" class="form-control" value="{{$dados->titulocontato}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Telefone</h4></label>
                <input type="text" name="telefone" class="form-control" value="{{$dados->telefone}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Email</h4></label>
                <input type="text" name="email" class="form-control" value="{{$dados->email}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Hoario de Atendimento</h4></label>
                <input type="text" name="atendimento" placeholder="Seg – Sex 09:00-17:00" class="form-control" value="{{$dados->atendimento}}">
            </div>


            <br>
            <button class="btn btn-primary black" type="submit">Atualizar</button>


        </form>
    </div>

</div>

<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
