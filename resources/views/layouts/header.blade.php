<div class="attorna-body-wrapper clearfix  attorna-with-frame">
            <div class=attorna-top-bar>
                <div class=attorna-top-bar-background></div>
                <div class="attorna-top-bar-container attorna-container ">
                    <div class="attorna-top-bar-container-inner clearfix">
                        <div class="attorna-top-bar-left attorna-item-pdlr"><i class="fa fa-phone" style="font-size: 15px ;color: #b1976b ;margin-right: 10px ;"></i>{{$dados->telefone}}
                            <div style="margin-left: 12px; margin-right: 14px; display: inline;">&#183;</div><i class="fa fa-envelope-open-o" style="font-size: 14px ;color: #b1976b ;margin-right: 10px ;"></i><a href=mailto:admin@logiscotheme.co>{{$dados->email}}</a>
                            <div style="margin-left: 10px; margin-right: 13px; display: inline;">&#183;</div><i class=icon_clock_alt style="font-size: 15px ;color: #b1976b ;margin-right: 10px ;"></i>{{$dados->atendimento}}</div><a class=attorna-top-bar-right-button href={{route('contact')}} target=_self><i class="fa fa-comment-o" ></i>Entre em Contato</a>
                        <div class="attorna-top-bar-right attorna-item-pdlr">
                            <div class=attorna-top-bar-right-social>
                                @if($dados->facebook)
                                    <a href="{{$dados->facebook}}" target=_blank class=attorna-top-bar-social-icon title=facebook><i class="fa fa-facebook" ></i></a>
                                @endif

                                @if($dados->linkedin)
                                    <a href="{{$dados->linkedin}}" target=_blank class=attorna-top-bar-social-icon title=linkedin><i class="fa fa-linkedin" ></i></a>
                                @endif
                                @if($dados->pinterest)
                                    <a href="{{$dados->pinterest}}" target=_blank class=attorna-top-bar-social-icon title=pinterest><i class="fa fa-pinterest-p" ></i></a>
                                @endif
                                @if($dados->twitter)
                                    <a href="{{$dados->twitter}}" target=_blank class=attorna-top-bar-social-icon title=twitter><i class="fa fa-twitter" ></i></a>
                                @endif
                                @if($dados->instagram)
                                    <a href="{{$dados->instagram}}" target=_blank class=attorna-top-bar-social-icon title=instagram><i class="fa fa-instagram" ></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <header class="attorna-header-wrap attorna-header-style-plain  attorna-style-menu-right attorna-sticky-navigation attorna-style-fixed" data-navigation-offset=75px>
                <div class=attorna-header-background></div>
                <div class="attorna-header-container  attorna-container">
                    <div class="attorna-header-container-inner clearfix">
                        <div class="attorna-logo  attorna-item-pdlr">
                            <div class=attorna-logo-inner>
                                <a class href="{{route('home')}}"><img src="{{$dados->icone}}" alt width=400 height=71 title=logo></a>
                            </div>
                        </div>
                        <div class="attorna-navigation attorna-item-pdlr clearfix ">
                            <div class=attorna-main-menu id=attorna-main-menu>
                                <ul id=menu-main-navigation-1 class=sf-menu>
                                    <li class="menu-item menu-item-home menu-item-has-children attorna-normal-menu"><a href="{{route('home')}}" class=sf-with-ul-pre>Home</a></li>
                                    <li class="menu-item  current-menu-item menu-item-has-children attorna-normal-menu"><a href="{{route('gallery')}}" class=sf-with-ul-pre>Galeria</a>
                                        <!--<ul class=sub-menu> -->
                                            <!-- <li class="menu-item"><a href="{{route('maintenance')}}">Maintenance</a></li>
                                            <li class="menu-item"><a href="{{route('coming_soon')}}">Coming Soon</a></li>
                                            <li class="menu-item"><a href="asdahsdhashdyas">404 Page</a></li> -->
                                        <!-- </ul> -->
                                    </li>
                                    <li class="menu-item menu-item-has-children attorna-normal-menu"><a href="{{route('price_table')}}" class=sf-with-ul-pre>Planos</a></li>
                                    <li class="menu-item menu-item-has-children attorna-normal-menu"><a href="#" class=sf-with-ul-pre>Sobre</a>
                                        <ul class=sub-menu>
                                            <li class="menu-item" data-size=60><a href="{{route('about_us')}}">Empresa</a></li>
                                            <li class="menu-item" data-size=60><a href="{{route('about_team')}}">Equipe</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children attorna-normal-menu"><a href="{{route('contact')}}" class=sf-with-ul-pre>Contato</a></li>
                                    <li class="menu-item menu-item-has-children attorna-normal-menu"><a href="{{route('blog')}}" class=sf-with-ul-pre>Blog</a></li>
                            </ul>
                            <div class=attorna-navigation-slide-bar id=attorna-navigation-slide-bar></div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
