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
<body>
@component('admin.adminHead')
@endcomponent

<div class="container" style="margin-top: 20px;">
    <div id="form-container" class="container">
        <form method="Post" action="{{ route('PartnerUpdater', $partner->id) }}">
            {{method_field('PUT')}}
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleFormControlInput1"><h2>Nome do Parceiro</h2></label>
                <input type="text" name="name" class="form-control" value="{{$partner->name}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Ocupação</h4></label>
                <input type="text" name="ocupation" class="form-control" value="{{$partner->ocupation}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"><h4>Foto</h4></label>
                <input type="text" name="image" class="form-control" placeholder="Tamanho: 599x551" value="{{$partner->image}}">
            </div>
            <div class="row">
                <div class="col">
                    <label for="exampleFormControlInput1"><h5>Facebook</h5></label>
                    <input type="text" name="facebook" class="form-control" value="{{$partner->facebook}}">
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1"><h5>Linkedin</h5></label>
                    <input type="text" name="linkedin" class="form-control" value="{{$partner->linkedin}}">
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1"><h5>Pinterest</h5></label>
                    <input type="text" name="pinterest" class="form-control" value="{{$partner->pinterest}}">
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1"><h5>Twitter</h5></label>
                    <input type="text" name="twitter" class="form-control" value="{{$partner->twitter}}">
                </div>
            </div>
            <br>


            <br>
            <button class="btn btn-primary black" type="submit">Atualizar</button>


        </form>
    </div>



    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
