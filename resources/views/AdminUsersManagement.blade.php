<!DOCTYPE html>
<html lang=en-US class=no-js>


<head>

    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel=stylesheet href='plugins/goodlayers-core/plugins/combine/style.css' type=text/css media=all>
    <link rel=stylesheet href='plugins/goodlayers-core/include/css/page-builder.css' type=text/css media=all>
    <link rel=stylesheet href='plugins/revslider/public/assets/css/settings.css' type=text/css media=all>
    <link rel=stylesheet href='css/style-core.css' type=text/css media=all>
    <link rel=stylesheet href='css/attorna-style-custom.css' type=text/css media=all>
	<link rel=stylesheet href='plugins/revslider/public/assets/fonts/font-awesome/css/font-awesome.css' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMerriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext%2Cdevanagari%2Ccyrillic-ext%2Cvietnamese%2Ccyrillic&amp;' type=text/css media=all>
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<style>
body {
  overflow-x: hidden;
}

#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin .25s ease-out;
  -moz-transition: margin .25s ease-out;
  -o-transition: margin .25s ease-out;
  transition: margin .25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}

</style>
</head>

<body>
<div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Start Bootstrap </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
      </div>
    </div>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="container">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged innn!
                    
                    <table>
                        <thead>
                            <tr style="font-weight:bolder;">
                                <td style="margin-top: 10px; "> Email </td>
                                <td style="margin-top: 10px"> Id </td>
                                <td style="margin-top: 10px"> Nome </td>
                            </tr>
                        </thead>
                        @foreach($users as $user)
                        <tr>
                            <td style="margin-top: 10px">{{$user->email}} </td>
                            <td style="margin-top: 10px">{{$user->id}} </td>
                            <td style="margin-top: 10px">{{$user->name}} </td>
                        </tr>
                        @endforeach
                    </table>

                </div>
                </div>
            </div>
        </div>
    </div>
</div>

