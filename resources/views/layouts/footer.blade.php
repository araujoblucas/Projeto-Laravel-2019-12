<?php
    use App\ConfigDefault;
    $dados = ConfigDefault::find(1);

?>


<footer>
    <div class="attorna-footer-wrapper ">
        <div class="attorna-footer-container attorna-container clearfix">
            <div class="attorna-footer-column attorna-item-pdlr attorna-column-15">
                <div id=text-1 class="widget widget_text attorna-widget">
                    <div class=textwidget>
                        <p><img class="alignnone size-full wp-image-6129" src="{{$dados->icone}}" alt width=210>
                            <br> <span class=gdlr-core-space-shortcode style="margin-top: -27px ;"></span>
                            <br> {{$dados->descricaofooter}}</p>
                        <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;">
                            <?php if($dados->facebook) { ?>
                            <a href="{{$dados->facebook}}" target=_blank class=attorna-top-bar-social-icon title=facebook><i class="fa fa-facebook" ></i></a>
                            <?php } ?>
                            <?php if($dados->linkedin) { ?>
                            <a href="{{$dados->linkedin}}" target=_blank class=attorna-top-bar-social-icon title=linkedin><i class="fa fa-linkedin" ></i></a>
                            <?php } ?>
                            <?php if($dados->pinterest) { ?>
                            <a href="{{$dados->pinterest}}" target=_blank class=attorna-top-bar-social-icon title=pinterest><i class="fa fa-pinterest-p" ></i></a>
                            <?php } ?>
                            <?php if($dados->twitter) { ?>
                            <a href="{{$dados->twitter}}" target=_blank class=attorna-top-bar-social-icon title=twitter><i class="fa fa-twitter" ></i></a>
                            <?php } ?>
                            <?php if($dados->instagram) { ?>
                            <a href="{{$dados->instagram}}" target=_blank class=attorna-top-bar-social-icon title=instagram><i class="fa fa-instagram" ></i></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="attorna-footer-column attorna-item-pdlr attorna-column-15">
                <div id=text-7 class="widget widget_text attorna-widget">
                    <h3 class="attorna-widget-title">Informações para Contato</h3><span class=clear></span>
                    <div class=textwidget>
                        <p>{{$dados->contatolinha1footer}}
                            <br>{{$dados->contatolinha2footer}}
                            <br> {{$dados->contatolinha3footer}} </p>
                        <p><span style="color: #fff;">{{$dados->telefone}}</span>
                            <br> <span style="color: #a69a87;">{{$dados->email}}</span></p>
                    </div>
                </div>
            </div>
            <div class="attorna-footer-column attorna-item-pdlr attorna-column-30">
                <div id=gdlr-core-custom-menu-widget-4 class="widget widget_gdlr-core-custom-menu-widget attorna-widget">
                    <h3 class="attorna-widget-title">Navegue pelo Site</h3><span class=clear></span>
                    <div class=menu-practice-areas-container>
                        <ul id=menu-practice-areas class="gdlr-core-custom-menu-widget gdlr-core-menu-style-half">
                            <li class="menu-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="menu-item"><a href="{{route('gallery')}}">Galeria</a></li>
                            <li class="menu-item"><a href="{{route('about_team')}}">Nossa Equipe</a></li>
                            <li class="menu-item"><a href="{{route('about_us')}}">Sobre Nós</a></li>
                            <li class="menu-item"><a href="{{route('blog')}}">Blog</a></li>
                            <li class="menu-item"><a href="{{route('contact')}}">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=attorna-copyright-wrapper>
        <div class="attorna-copyright-container attorna-container clearfix">
            <div class="attorna-copyright-left attorna-item-pdlr">Copyright 2019 Attorna, All Right Reserved</div>
            <div class="attorna-copyright-right attorna-item-pdlr">
                <a href="{{route('home')}}" style=margin-left:21px;>Home</a>
                <a href="{{route('gallery')}}" style=margin-left:21px;>Galeria</a>
                <a href="{{route('about_team')}}" style=margin-left:21px;>Nossa Equipe</a>
                <a href="{{route('about_us')}}" style=margin-left:21px;>Sobre Nós</a>
                <a href="{{route('contact')}}" style=margin-left:21px;>Contato</a>
            </div>
        </div>
    </div>
</footer>
