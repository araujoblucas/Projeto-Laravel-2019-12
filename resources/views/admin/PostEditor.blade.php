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

<div class="container bg-light" style="margin-top: 20px;">
    <div id="form-container" class="container">
        <form method="Post" action="{{ route('PostUpdater', $post->id) }}">
            {{method_field('PUT')}}
            {{csrf_field()}}
            <br>
            <h1 class="display-4">Editar Post<hr class="mb-4"></h1>
            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Titulo do Post</h5></label>
                <input type="text" name="titulo" class="form-control" value="{{ $post->titulo }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Insira o link da Imagem</h5></label>
                <input type="text" name="img" class="form-control" value="{{ $post->img }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"><h5>Insira o autor do Post</h5></label>
                <input type="text" name="autor" class="form-control" value="{{ $post->autor }}">
            </div>
            <textarea name="descricao" id="editor1">
                {{ $post->descricao }}
                    </textarea>


            <br>
            <button class="btn btn-primary black" type="submit">Atualizar</button>


        </form>
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
