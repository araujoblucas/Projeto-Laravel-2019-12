<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('admin_config')}}">Admin</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-left">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin_config') }}">Default</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin_home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin_about_team')}}">Equipe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin_about_us')}}">Sobre Nós</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin_contact')}}">Contato</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin_gallery')}}">Galeria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin_price_table')}}">Planos</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Posts
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('PostCreator') }}">Adicionar</a>
                    <a class="dropdown-item" href="{{ route('PostList') }}">Listar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Parceiros
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('partner_create') }}">Adicionar</a>
                    <a class="dropdown-item" href="{{ route('partner_show') }}">Listar</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-right">
            <li class="nav-item">
                <h1 class="nav-link h5" >{{auth()->user()->name}}</h1>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Sair</a>
            </li>

        </ul>
    </div>
</nav>
