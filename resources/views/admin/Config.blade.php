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
    h2, h5 {
        font-family: Roboto;
    }
</style>


</head>
<body>
@component('admin.adminHead')
@endcomponent

<div class="container bg-light" style="margin-top: 20px;border-radius: 10px">
    <div id="form-container" class="container">
        <form method="post" action="{{ route('admin_config') }}">

            <br>
            <h1 class="display-4">Configurações do Head<hr class="mb-4"></h1>
            <div class="form-group">
                <label for="exampleFormControlInput1"><h2>Ícone</h2></label>
                <input type="text" name="icone" class="form-control" value="{{$dados->icone}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h2>Telefone</h2></label>
                <input type="text" name="telefone" class="form-control" value="{{$dados->telefone}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h2>Email</h2></label>
                <input type="text" name="email" class="form-control" value="{{$dados->email}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"><h2>Atendimento</h2></label>
                <input type="text" name="atendimento" class="form-control" value="{{$dados->atendimento}}">
            </div>

            <div class="row">
                <div class="col">
                    <label for="exampleFormControlInput1"><h5>Facebook</h5></label>
                    <input type="text" name="facebook" class="form-control" value="{{$dados->facebook}}">
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1"><h5>Linkedin</h5></label>
                    <input type="text" name="linkedin" class="form-control" value="{{$dados->linkedin}}">
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1"><h5>Pinterest</h5></label>
                    <input type="text" name="pinterest" class="form-control" value="{{$dados->pinterest}}">
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1"><h5>Twitter</h5></label>
                    <input type="text" name="twitter" class="form-control" value="{{$dados->twitter}}">
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1"><h5>Instagram</h5></label>
                    <input type="text" name="instagram" class="form-control" value="{{$dados->instagram}}">
                </div>
            </div>

            <br>

            <h1 class="display-4">Configurações de Footer<hr class="mb-4"></h1>
            <div class="form-group">
                <label for="exampleFormControlInput1"><h2>Atendimento</h2></label>
                <input type="text" name="atendimento" class="form-control" value="{{$dados->atendimento}}">
            </div>
            <br>

            <button class="btn btn-primary black" type="submit">Atualizar</button>
            <br><br>
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
