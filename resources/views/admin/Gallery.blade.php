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
use App\Gallery;
$dados = Gallery::Find(1);
?>
<body>
@component('admin.adminHead')
@endcomponent

<div class="container" style="margin-top: 20px;">
    <div id="form-container" class="container">
        <form method="post" action="{{ route('admin_gallery') }}">

            <div class="form-group">
                <label for="exampleFormControlInput1"><h2>Titulo</h2></label>
                <input type="text" name="titulo" class="form-control" value="{{$dados->titulo}}">
            </div>

            <br>

            <div class="form-inline">
                <label for="exampleFormControlInput1"><h3 style="margin-right: 10px;">Galeria em Grid</h3></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="booleangrid" value="1">
                    <label class="form-check-label" style="margin-right: 10px;">
                        Ativar
                    </label>
                </div>
                <div class="form-check" >
                    <input class="form-check-input"  type="radio" name="booleangrid"value="0" checked>
                    <label class="form-check-label">
                        Desativar
                    </label>
                </div>
            </div>



            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Titulo Grid</h5></label>
                <input type="text" name="titulogrid" class="form-control" value="{{$dados->titulogrid}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Subtitulo Grid</h5></label>
                <input type="text" name="subtitulogrid" class="form-control" value="{{$dados->subtitulogrid}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Imagem 1</h5></label>
                <input type="text" name="imagemgrid1" class="form-control" placeholder="700x660" value="{{$dados->imagemgrid1}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Imagem 2</h5></label>
                <input type="text" name="imagemgrid2" class="form-control" placeholder="700x660" value="{{$dados->imagemgrid2}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Imagem 3</h5></label>
                <input type="text" name="imagemgrid3" class="form-control" placeholder="700x660" value="{{$dados->imagemgrid3}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Imagem 4</h5></label>
                <input type="text" name="imagemgrid4" class="form-control" placeholder="700x660" value="{{$dados->imagemgrid4}}">
            </div>


            <div class="form-inline">
                <label for="exampleFormControlInput1"><h3 style="margin-right: 10px;">Galeria Horizontal</h3></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="booleanhorizontal" value="1">
                    <label class="form-check-label" style="margin-right: 10px;">
                        Ativar
                    </label>
                </div>
                <div class="form-check" >
                    <input class="form-check-input"  type="radio" name="booleanhorizontal"  value="0" checked>
                    <label class="form-check-label">
                        Desativar
                    </label>
                </div>
            </div>



            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Titulo Horizontal</h5></label>
                <input type="text" name="titulohorizontal" class="form-control" value="{{$dados->titulohorizontal}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Subtitulo Horizontal</h5></label>
                <input type="text" name="subtitulohorizontal" class="form-control" value="{{$dados->subtitulohorizontal}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Imagem 1</h5></label>
                <input type="text" name="imagemhorizontal1" class="form-control" placeholder="1500x1000" value="{{$dados->imagemhorizontal1}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Legenda Imagem 1</h5></label>
                <input type="text" name="legendahorizontal1" class="form-control" value="{{$dados->legendahorizontal1}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Imagem 2</h5></label>
                <input type="text" name="imagemhorizontal2" class="form-control"  placeholder="1500x1000" value="{{$dados->imagemhorizontal2}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Legenda Imagem 2</h5></label>
                <input type="text" name="legendahorizontal2" class="form-control" value="{{$dados->legendahorizontal2}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Imagem 3</h5></label>
                <input type="text" name="imagemhorizontal3" class="form-control" placeholder="1500x1000" value="{{$dados->imagemhorizontal3}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Legenda Imagem 3</h5></label>
                <input type="text" name="legendahorizontal3" class="form-control" value="{{$dados->legendahorizontal3}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Imagem 4(opcional)</h5></label>
                <input type="text" name="imagemhorizontal4" class="form-control" placeholder="1500x1000" value="{{$dados->imagemhorizontal4}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Legenda Imagem 4(opcional)</h5></label>
                <input type="text" name="legendahorizontal4" class="form-control" value="{{$dados->legendahorizontal4}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Imagem 5(opcional)</h5></label>
                <input type="text" name="imagemhorizontal5" class="form-control" placeholder="1500x1000" value="{{$dados->imagemhorizontal5}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Legenda Imagem 5(opcional)</h5></label>
                <input type="text" name="legendahorizontal5" class="form-control" value="{{$dados->legendahorizontal5}}">
            </div>





            <button class="btn btn-primary black" type="submit">Postar</button>


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
