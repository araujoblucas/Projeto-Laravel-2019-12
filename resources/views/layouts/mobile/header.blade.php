 <div class="attorna-mobile-header attorna-header-background attorna-style-slide attorna-sticky-mobile-navigation " id=attorna-mobile-header>
        <div class="attorna-mobile-header-container attorna-container clearfix">
            <div class="attorna-logo  attorna-item-pdlr">
                <div class=attorna-logo-inner>
                    <a class href={{route('home')}}><img src="{{$dados->icone}}" alt width=400 height=71 title=logo></a>
                </div>
            </div>
            <div class=attorna-mobile-menu-right>
                <div class=attorna-mobile-menu><a class="attorna-mm-menu-button attorna-mobile-menu-button attorna-mobile-button-hamburger-with-border" href=#attorna-mobile-menu><i class="fa fa-bars" ></i></a>
                    <div class="attorna-mm-menu-wrap attorna-navigation-font" id=attorna-mobile-menu data-slide=right>
                        <ul id=menu-main-navigation class=m-menu>
                            <li class="menu-item menu-item-home current-menu-item menu-item-has-children"><a href="{{route('home')}}" aria-current=page>Home</a></li>
                            <li class="menu-item menu-item-has-children"><a href="{{route('gallery')}}">Galeria</a></li>
                            <li class="menu-item menu-item-has-children"><a href="{{route('price_table')}}">Planos</a></li>
                            <li class="menu-item menu-item-has-children"><a href="#">Sobre</a>
                                <ul class=sub-menu>
                                    <li class="menu-item"><a href="{{route('about_us')}}">Empresa</a></li>
                                    <li class="menu-item"><a href="{{route('about_team')}}">Equipe</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="{{route('blog')}}">Blog</a></li>
                            <li class="menu-item menu-item-has-children"><a href="{{route('contact')}}">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
