<!DOCTYPE html>
<html lang=en-US class=no-js>

<head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1">

    <title>{{$dados->titulo}}</title>


    <link rel=stylesheet href='plugins/goodlayers-core/plugins/combine/style.css' type=text/css media=all>
    <link rel=stylesheet href='plugins/goodlayers-core/include/css/page-builder.css' type=text/css media=all>
    <link rel=stylesheet href='plugins/revslider/public/assets/css/settings.css' type=text/css media=all>
    <link rel=stylesheet href='css/style-core.css' type=text/css media=all>
    <link rel=stylesheet href='css/attorna-style-custom.css' type=text/css media=all>
	<link rel=stylesheet href='plugins/revslider/public/assets/fonts/font-awesome/css/font-awesome.css' type=text/css media=all>

    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMerriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext%2Cdevanagari%2Ccyrillic-ext%2Cvietnamese%2Ccyrillic&amp;' type=text/css media=all>


</head>
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js attorna-body attorna-body-front attorna-full  attorna-with-sticky-navigation  attorna-blockquote-style-1 gdlr-core-link-to-lightbox" data-home-url=index.html>
<div class=attorna-mobile-header-wrap>
    @component('layouts.mobile.header');
    @endcomponent
</div>
<div class="attorna-body-outer-wrapper ">
    @component('layouts.header');
    @endcomponent

        <div class="attorna-page-title-wrap  attorna-style-large attorna-center-align">
            <div class=attorna-header-transparent-substitute></div>
            <div class=attorna-page-title-overlay></div>
            <div class="attorna-page-title-container attorna-container">
                <div class="attorna-page-title-content attorna-item-pdlr">
                    <h1 class="attorna-page-title">{{$dados->titulo}}</h1>
                    <div class=attorna-page-caption>{{$dados->subtitulo}}</div>
                </div>
            </div>
        </div>
        <div class=attorna-page-wrapper id=attorna-page-wrapper>
            <div class=gdlr-core-page-builder-body>

                <div class="gdlr-core-pbf-wrapper " style="padding: 90px 0px 60px 0px;">
                    <div class=gdlr-core-pbf-background-wrap style="background-color: #f1f1f1 ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 17px ;font-style: normal ;">{{$dados->titulo2}}</span>
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 45px ;letter-spacing: 0px ;text-transform: none ;">{{$dados->subtitulo2}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 50px ;">
                                    <div class=gdlr-core-text-box-item-content style="font-size: 16px ;">
                                        <p>{{$dados->descricao}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-price-table-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix ">
                                    <div class="gdlr-core-price-table-column gdlr-core-column-20">
                                        <div class="gdlr-core-price-table ">
                                            <div class=gdlr-core-price-table-head>
                                                <div class=gdlr-core-price-table-icon><i class="fa fa-lightbulb-o"></i></div>
                                                <h3 class="gdlr-core-price-table-title">{{$dados->planoesquerdatitulo}}</h3>
                                                <div class=gdlr-core-price-table-caption>{{$dados->planoesquerdasubtitulo}}</div>
                                            </div>
                                            <div class="gdlr-core-price-table-price gdlr-core-title-font"><span class=gdlr-core-price-prefix>R$</span><span class=gdlr-core-price-table-price-number>{{$dados->precoesquerda}}</span><span class=gdlr-core-price-suffix>/ mensal</span></div>
                                            <div class=gdlr-core-price-table-content-wrap>
                                                <div class=gdlr-core-price-table-content>
                                                    <div class=gdlr-core-price-list-shortcode>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i>{{$dados->esquerdalista1}}</li>
                                                            <li><i class="fa fa-check"></i>{{$dados->esquerdalista2}}</li>
                                                            <li><i class="fa fa-check"></i>{{$dados->esquerdalista3}}</li>
                                                            <li><i class="fa fa-check"></i>{{$dados->esquerdalista4}}</li>
                                                            <li><i class="fa fa-check"></i>{{$dados->esquerdalista5}}</li>

                                                        </ul>
                                                    </div>
                                                </div><a class="gdlr-core-price-table-button gdlr-core-button" href="{{route('contact')}}" target=_self>Mais Informações</a></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-price-table-column gdlr-core-column-20">
                                        <div class="gdlr-core-price-table gdlr-core-active">
                                            <div class=gdlr-core-price-table-head>
                                                <div class=gdlr-core-price-table-icon><i class="fa fa-codepen"></i></div>
                                                <h3 class="gdlr-core-price-table-title">{{$dados->planocentrotitulo}}</h3>
                                                <div class=gdlr-core-price-table-caption>{{$dados->planocentrosubtitulo}}</div>
                                            </div>
                                            <div class="gdlr-core-price-table-price gdlr-core-title-font"><span class=gdlr-core-price-prefix>R$</span><span class=gdlr-core-price-table-price-number>{{$dados->precocentro}}</span><span class=gdlr-core-price-suffix>/ mensal</span></div>
                                            <div class=gdlr-core-price-table-content-wrap>
                                                <div class=gdlr-core-price-table-content>
                                                    <div class=gdlr-core-price-list-shortcode>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i>{{$dados->centrolista1}}</li>
                                                            <li><i class="fa fa-check"></i>{{$dados->centrolista2}}</li>
                                                            <li><i class="fa fa-check"></i>{{$dados->centrolista3}}</li>
                                                            <li><i class="fa fa-check"></i>{{$dados->centrolista4}}</li>
                                                            <li><i class="fa fa-check"></i>{{$dados->centrolista5}}</li>
                                                        </ul>
                                                    </div>
                                                </div><a class="gdlr-core-price-table-button gdlr-core-button" href="{{route('contact')}}" target=_self>Mais Informações</a></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-price-table-column gdlr-core-column-20">
                                        <div class="gdlr-core-price-table ">
                                            <div class=gdlr-core-price-table-head>
                                                <div class=gdlr-core-price-table-icon><i class="fa fa-connectdevelop"></i></div>
                                                <h3 class="gdlr-core-price-table-title">{{$dados->planodireitatitulo}}</h3>
                                                <div class=gdlr-core-price-table-caption>{{$dados->planodireitasubtitulo}}</div>
                                            </div>
                                            <div class="gdlr-core-price-table-price gdlr-core-title-font"><span class=gdlr-core-price-prefix>R$</span><span class=gdlr-core-price-table-price-number>{{$dados->precodireita}}</span><span class=gdlr-core-price-suffix>/ mensal</span></div>
                                            <div class=gdlr-core-price-table-content-wrap>
                                                <div class=gdlr-core-price-table-content>
                                                    <div class=gdlr-core-price-list-shortcode>
                                                        <ul>
                                                            <li><i class="fa fa-check"></i>{{$dados->direitalista1}}</li>
                                                            <li><i class="fa fa-check"></i>{{$dados->direitalista2}}</li>
                                                            <li><i class="fa fa-check"></i>{{$dados->direitalista3}}</li>
                                                            <li><i class="fa fa-check"></i>{{$dados->direitalista4}}</li>
                                                            <li><i class="fa fa-check"></i>{{$dados->direitalista5}}</li>
                                                        </ul>
                                                    </div>
                                                </div><a class="gdlr-core-price-table-button gdlr-core-button" href="{{route('contact')}}" target=_self>Mais Informações</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    @component('layouts.footer');
    @endcomponent

    </div>
</div>

<script src='js/jquery/jquery.js'></script>
<script src='js/jquery/jquery-migrate.min.js'></script>
<script src='plugins/goodlayers-core/plugins/combine/script.js'></script>
<script>
    var gdlr_core_pbf = {
        "admin": "",
        "video": {
            "width": "640",
            "height": "360"
        },
        "ajax_url": "https:\/\/demo.goodlayers.com\/attorna\/wp-admin\/admin-ajax.php"
    };
</script>
<script src='plugins/goodlayers-core/include/js/page-builder.js'></script>


<script src='js/jquery/ui/effect.min.js'></script>
<script src='js/jquery.mmenu.js'></script>
<script src='js/jquery.superfish.js'></script>
<script src='js/script-core.js'></script>

</body>
</html>
