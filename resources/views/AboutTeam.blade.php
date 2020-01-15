<!DOCTYPE html>
<html lang=en-US class=no-js>
<?php
use App\AboutTeam;
use App\Partner;
$dados = AboutTeam::Find(1);
//$partners = Partner::all();
$partners = Partner::all();


?>

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
    @component('layouts.mobile.header')
    @endcomponent
</div>
<div class="attorna-body-outer-wrapper ">

    @component('layouts.header')
    @endcomponent



    <div class="attorna-page-title-wrap  attorna-style-custom attorna-center-align">
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
            <div class="gdlr-core-pbf-wrapper " style="padding: 85px 0px 30px 0px;background-color: #e9e9e9 ;">
                <div class=gdlr-core-pbf-background-wrap>
                    <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-size: cover ;background-position: center ;" data-parallax-speed=0.2></div>
                </div>
                <li class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class=gdlr-core-pbf-element>
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 15px ;">
                                <div class="gdlr-core-title-item-title-wrap ">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 30px ;font-weight: 700 ;text-transform: none ;color: #2f2f2f ;">Partners at Attorna<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                            </div>
                        </div>
                        <div class=gdlr-core-pbf-element>
                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align gdlr-core-style-vertical" style="margin-bottom: 65px ;">
                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;height: 30px ;"></div>
                            </div>
                        </div>




                        <div class=gdlr-core-pbf-element>
                            <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-personnel-item-style-grid-with-background gdlr-core-personnel-style-grid gdlr-core-with-background">
                                @foreach( $partners as $partner)
                                    <div class="gdlr-core-personnel-list-column  gdlr-core-column-20 gdlr-core-item-pdlr">
                                        <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix" style="box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                            <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                                <a href=#><img style="width:399px;height:351px;" src="{{$partner->image}}" title="{{$partner->name}}"></a>
                                            </div>
                                            <div class=gdlr-core-personnel-list-content-wrap>
                                                <h3 class="gdlr-core-personnel-list-title" style="font-size: 16px ;font-weight: 600 ;letter-spacing: 3px ;margin-bottom: 4px ;"><a href=# >{{$partner->name}}</a></h3>
                                                <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;">{{$partner->ocupation}}</div>
                                                <div class=gdlr-core-personnel-list-social>
                                                    <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;"><a href={{$partner->facebook}} target=_blank class=gdlr-core-social-network-icon title=facebook><i class="fa fa-facebook" ></i></a><a href={{$partner->linkedin}} target=_blank class=gdlr-core-social-network-icon title=linkedin><i class="fa fa-linkedin" ></i></a><a href={{$partner->pinterest}} target=_blank class=gdlr-core-social-network-icon title=pinterest><i class="fa fa-pinterest-p" ></i></a><a href={{$partner->twitter}} target=_blank class=gdlr-core-social-network-icon title=twitter><i class="fa fa-twitter" ></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-wrapper " style="padding: 170px 0px 130px 0px;" data-skin="white client" id=gdlr-core-wrapper-1>
                <div class=gdlr-core-pbf-background-wrap>
                    <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{$dados->imagem}}) ;background-size: cover ;background-position: center ;" data-parallax-speed=0.2></div>
                </div>
                <div class=gdlr-core-pbf-background-frame style="margin: 60px 60px 60px 60px;border-width: 1px 1px 1px 1px;border-style: solid ;border-color: #686868 ;"></div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class=gdlr-core-pbf-element>
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 15px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;color: #b1976b ;">{{$dados->tituloImagem}}</span>
                                <div class="gdlr-core-title-item-title-wrap ">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 33px ;font-weight: 700 ;text-transform: none ;color: #ffffff ;">{{$dados->subtituloImagem}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                            </div>
                        </div>
                        <div class=gdlr-core-pbf-element>
                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align gdlr-core-style-vertical" style="margin-bottom: 50px ;">
                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;height: 30px ;"></div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id=gdlr-core-column-1>
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 30px 65px;" data-sync-height=height2>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px ;">
                                            <div class=gdlr-core-text-box-item-content style="font-size: 17px ;font-weight: 400 ;text-transform: none ;color: #c4c4c4 ;">
                                                <p>{{$dados->desc1}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-30" id=gdlr-core-column-2>
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 65px 0px 0px;" data-sync-height=height2>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px ;">
                                            <div class=gdlr-core-text-box-item-content style="font-size: 17px ;font-weight: 400 ;text-transform: none ;color: #c4c4c4 ;">
                                                <p>{{$dados->desc2}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                            <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" style="font-size: 52px ;font-weight: 700 ;"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration data-counter-start=0 data-counter-end={{$dados->dado1}}></span><span class=gdlr-core-counter-item-suffix>+</span></div>
                                            <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" style="font-size: 17px ;font-weight: 400 ;text-transform: none ;">{{$dados->descdado1}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-15">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                            <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" style="font-size: 52px ;font-weight: 700 ;"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration data-counter-start=0 data-counter-end={{$dados->dado2}}>0</span><span class=gdlr-core-counter-item-suffix>%</span></div>
                                            <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" style="font-size: 17px ;font-weight: 400 ;text-transform: none ;">{{$dados->descdado2}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-15">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                            <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" style="font-size: 52px ;font-weight: 700 ;"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration data-counter-start=0 data-counter-end={{$dados->dado3}}>0</span><span class=gdlr-core-counter-item-suffix></span></div>
                                            <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" style="font-size: 17px ;font-weight: 400 ;text-transform: none ;">{{$dados->descdado3}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-15">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                            <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" style="font-size: 52px ;font-weight: 700 ;"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration data-counter-start=0 data-counter-end={{$dados->dado4}}>0</span><span class=gdlr-core-counter-item-suffix>+</span></div>
                                            <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" style="font-size: 17px ;font-weight: 400 ;text-transform: none ;">{{$dados->descdado4}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gdlr-core-pbf-wrapper " style="padding: 85px 0px 80px 0px;">
                <div class=gdlr-core-pbf-background-wrap style="background-color: #f3f3f3 ;"></div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " style="max-width: 1000px ;">
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                                            <div class="gdlr-core-title-item-title-wrap ">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 17px ;font-weight: 700 ;letter-spacing: 4px ;color: #2c2c2c ;">We are looking for new partners<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;margin-top: 30px ;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. </span></div>
                                    </div>
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 0px ;"><a class="gdlr-core-button  gdlr-core-button-gradient gdlr-core-button-no-border" href="{{route('contact')}}" style="font-size: 12px ;font-weight: 600 ;letter-spacing: 2px ;color: #ffffff ;padding: 13px 21px 14px 27px;text-transform: uppercase ;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;background: #b1976b ;"><span class=gdlr-core-content >Contato</span><i class="gdlr-core-pos-right fa fa-long-arrow-right"  ></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-wrapper " style="padding: 60px 100px 25px 100px;">
                <div class=gdlr-core-pbf-background-wrap></div>

        </div>
    </div>

    @component('layouts.footer')
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
