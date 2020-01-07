<!DOCTYPE html>
<html lang=en-US class=no-js>
<?php
use App\AboutUs;
$dados = AboutUs::find(1);
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
                <div class="attorna-page-title-content attorna-item-pdlr" style="padding-top: 150px ;padding-bottom: 150px ;">
                    <h1 class="attorna-page-title" style="font-size: 57px ;text-transform: none ;">{{$dados->titulo}}</h1>
                    <div class=attorna-page-caption>{{$dados->subtitulo}}</div>
                </div>
            </div>
        </div>
        <div class=attorna-page-wrapper id=attorna-page-wrapper>
            <div class=gdlr-core-page-builder-body>
                <div class="gdlr-core-pbf-wrapper " style="padding-top: 95px;padding-bottom: 100px;" id=gdlr-core-wrapper-1>
                    <div class=gdlr-core-pbf-background-wrap></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id=gdlr-core-column-1>
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " data-sync-height=height1 data-sync-height-center>
                                    <div class=gdlr-core-pbf-background-wrap style="border-radius: 4px 4px 4px 4px;-moz-border-radius: 4px 4px 4px 4px;-webkit-border-radius: 4px 4px 4px 4px;">
                                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/lawyer.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0></div>
                                    </div>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 0px ;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;">
                                                    <a class="gdlr-core-lightgallery gdlr-core-js " href="{{$dados->video}}"><img src=upload/player.png alt width=82 height=82 title=player></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-30" id=gdlr-core-column-2>
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 70px 0px 60px;" data-sync-height=height1>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align" style="margin-bottom: 25px ;">
                                                <div class=gdlr-core-divider-container style="max-width: 36px ;">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;border-bottom-width: 6px ;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 14px ;font-weight: 700 ;font-style: normal ;letter-spacing: 3px ;text-transform: uppercase ;color: #a3a3a3 ;">{{$dados->titulo2}}</span>
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 36px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #202020 ;">{{$dados->subtitulo2}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px ;">
                                                <div class=gdlr-core-text-box-item-content style="text-transform: none ;color: #6d6d6d ;">
                                                    <p>{{$dados->sobre}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 140px 80px 65px 80px;" data-skin="Our Philosophy" id=gdlr-core-wrapper-2>
                    <div class=gdlr-core-pbf-background-wrap>
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{$dados->imagemdesc}}) ;background-size: cover ;background-position: center ;" data-parallax-speed=0.2></div>
                    </div>
                    <div class=gdlr-core-pbf-background-frame style="margin: 45px 45px 45px 45px;border-width: 1px 1px 1px 1px;border-style: solid ;border-color: #575757 ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;">
                                                <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src=upload/law-icon-1.png alt width=35 height=50 title=law-icon-1></div>
                                                <div class=gdlr-core-column-service-content-wrapper>
                                                    <div class=gdlr-core-column-service-title-wrap>
                                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;">{{$dados->dado1}}</h3></div>
                                                    <div class=gdlr-core-column-service-content style="text-transform: none ;">
                                                        <p>{{$dados->descdado1}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;">
                                                <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-top: 4px;margin-bottom: 28px;"><img src=upload/law-icon2.png alt width=34 height=46 title=law-icon2></div>
                                                <div class=gdlr-core-column-service-content-wrapper>
                                                    <div class=gdlr-core-column-service-title-wrap>
                                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;">{{$dados->dado2}}</h3></div>
                                                    <div class=gdlr-core-column-service-content style="text-transform: none ;">
                                                        <p>{{$dados->descdado2}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;">
                                                <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-top: 5px;margin-bottom: 28px;"><img src=upload/law-icon3.png alt width=45 height=45 title=law-icon3></div>
                                                <div class=gdlr-core-column-service-content-wrapper>
                                                    <div class=gdlr-core-column-service-title-wrap>
                                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;">{{$dados->dado3}}</h3></div>
                                                    <div class=gdlr-core-column-service-content style="text-transform: none ;">
                                                        <p>{{$dados->descdado3}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 95px 0px 60px 0px;" data-skin="client consultation">
                    <div class=gdlr-core-pbf-background-wrap>
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-size: cover ;background-position: center ;" data-parallax-speed=0.2></div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 14px ;font-weight: 700 ;font-style: normal ;letter-spacing: 3px ;text-transform: uppercase ;color: #b1976b ;">{{$dados->titulo3}}</span>
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 33px ;font-weight: 700 ;text-transform: none ;color: #202020 ;">{{$dados->subtitulo3}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align gdlr-core-style-vertical" style="margin-bottom: 50px ;">
                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;height: 30px ;"></div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id=gdlr-core-column-3>
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 30px 50px;" data-sync-height=height2>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 25px ;">
                                                <div class=gdlr-core-text-box-item-content style="font-size: 16px ;font-weight: 400 ;text-transform: none ;color: #555555 ;">
                                                    <p>{{$dados->descesq}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 70px 0px 0px;" data-sync-height=height2>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 25px ;">
                                                <div class=gdlr-core-text-box-item-content style="font-size: 16px ;font-weight: 400 ;text-transform: none ;color: #555555 ;">
                                                    <p>{{$dados->descdir}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 10px 0px 0px 0px;">
                                    <div class=gdlr-core-pbf-background-wrap>
                                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/counter-bg-1.png) ;opacity: 0.5 ;background-repeat: no-repeat ;background-position: top center ;" data-parallax-speed=0></div>
                                    </div>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                                <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" style="font-size: 47px ;font-weight: 500 ;"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration data-counter-start=0 data-counter-end={{$dados->estatistica1}}>0</span><span class=gdlr-core-counter-item-suffix>+</span></div>
                                                <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" style="font-size: 17px ;font-weight: 400 ;text-transform: none ;">{{$dados->descestatistica1}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-15">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 10px 0px 0px 0px;">
                                    <div class=gdlr-core-pbf-background-wrap>
                                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/counter-bg-1.png) ;opacity: 0.5 ;background-repeat: no-repeat ;background-position: top center ;" data-parallax-speed=0></div>
                                    </div>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                                <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" style="font-size: 47px ;font-weight: 500 ;"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration data-counter-start=0 data-counter-end={{$dados->estatistica2}}>0</span><span class=gdlr-core-counter-item-suffix>%</span></div>
                                                <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" style="font-size: 17px ;font-weight: 400 ;text-transform: none ;">{{$dados->descestatistica2}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-15">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 10px 0px 0px 0px;">
                                    <div class=gdlr-core-pbf-background-wrap>
                                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/counter-bg-1.png) ;opacity: 0.5 ;background-repeat: no-repeat ;background-position: top center ;" data-parallax-speed=0></div>
                                    </div>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                                <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" style="font-size: 47px ;font-weight: 500 ;"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration data-counter-start=0 data-counter-end={{$dados->estatistica3}}>0</span><span class=gdlr-core-counter-item-suffix></span></div>
                                                <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" style="font-size: 17px ;font-weight: 400 ;text-transform: none ;">{{$dados->estatistica3}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-15">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 10px 0px 0px 0px;">
                                    <div class=gdlr-core-pbf-background-wrap>
                                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/counter-bg-1.png) ;opacity: 0.5 ;background-repeat: no-repeat ;background-position: top center ;" data-parallax-speed={{$dados->estatistica4}}></div>
                                    </div>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                                <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" style="font-size: 47px ;font-weight: 500 ;"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration data-counter-start=0 data-counter-end=30>0</span><span class=gdlr-core-counter-item-suffix>+</span></div>
                                                <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" style="font-size: 17px ;font-weight: 400 ;text-transform: none ;">{{$dados->descestatistica4}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 100px 50px 50px 50px;" data-skin="frequently asked">
                    <div class=gdlr-core-pbf-background-wrap>
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{$dados->imagemfaq}}) ;background-size: cover ;background-position: center ;" data-parallax-speed=0.2></div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 45px ;">
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 28px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #b1976b ;">Perguntas Frequentes<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" data-skin=Accordion>
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-accordion-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-accordion-style-icon gdlr-core-allow-close-all">
                                                <div class="gdlr-core-accordion-item-tab clearfix  gdlr-core-active">
                                                    <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                                    <div class=gdlr-core-accordion-item-content-wrapper>
                                                        <h4 class="gdlr-core-accordion-item-title gdlr-core-js " style="font-size: 18px ;font-weight: 500 ;letter-spacing: 0px ;text-transform: none ;">{{$dados->ask1}}</h4>
                                                        <div class=gdlr-core-accordion-item-content>
                                                            <p>{{$dados->answer1}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-accordion-item-tab clearfix ">
                                                    <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                                    <div class=gdlr-core-accordion-item-content-wrapper>
                                                        <h4 class="gdlr-core-accordion-item-title gdlr-core-js " style="font-size: 18px ;font-weight: 500 ;letter-spacing: 0px ;text-transform: none ;">{{$dados->ask2}}</h4>
                                                        <div class=gdlr-core-accordion-item-content>
                                                            <p>{{$dados->answer2}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-accordion-item-tab clearfix ">
                                                    <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                                    <div class=gdlr-core-accordion-item-content-wrapper>
                                                        <h4 class="gdlr-core-accordion-item-title gdlr-core-js " style="font-size: 18px ;font-weight: 500 ;letter-spacing: 0px ;text-transform: none ;">{{$dados->ask3}}</h4>
                                                        <div class=gdlr-core-accordion-item-content>
                                                            <p>{{$dados->answer3}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-accordion-item-tab clearfix ">
                                                    <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                                    <div class=gdlr-core-accordion-item-content-wrapper>
                                                        <h4 class="gdlr-core-accordion-item-title gdlr-core-js " style="font-size: 18px ;font-weight: 500 ;letter-spacing: 0px ;text-transform: none ;">{{$dados->ask4}}</h4>
                                                        <div class=gdlr-core-accordion-item-content>
                                                            <p>{{$dados->answer4}}</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php if($dados->ask5) { ?>
                                                <div class="gdlr-core-accordion-item-tab clearfix ">
                                                    <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                                    <div class=gdlr-core-accordion-item-content-wrapper>
                                                        <h4 class="gdlr-core-accordion-item-title gdlr-core-js " style="font-size: 18px ;font-weight: 500 ;letter-spacing: 0px ;text-transform: none ;">{{$dados->ask5}}</h4>
                                                        <div class=gdlr-core-accordion-item-content>
                                                            <p>{{$dados->answer5}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                                <?php if($dados->ask6) { ?>
                                                <div class="gdlr-core-accordion-item-tab clearfix ">
                                                    <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                                    <div class=gdlr-core-accordion-item-content-wrapper>
                                                        <h4 class="gdlr-core-accordion-item-title gdlr-core-js " style="font-size: 18px ;font-weight: 500 ;letter-spacing: 0px ;text-transform: none ;">{{$dados->ask6}}</h4>
                                                        <div class=gdlr-core-accordion-item-content>
                                                            <p>{{$dados->answer6}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 78px 0px 55px 0px;background-color: #f2f2f2 ;">

                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 160px 0px 110px 0px;" data-skin=Newsletter id=gdlr-core-wrapper-3>
                    <div class=gdlr-core-pbf-background-wrap>
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{$dados->imagemcontato}}) ;background-size: cover ;background-position: center ;" data-parallax-speed=0.2></div>
                    </div>
                    <div class=gdlr-core-pbf-background-frame style="margin: 55px 55px 55px 55px;border-width: 1px 1px 1px 1px;border-style: solid ;border-color: #686868 ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 18px ;font-weight: 700 ;font-style: normal ;letter-spacing: 4px ;text-transform: uppercase ;color: #ffffff ;">{{$dados->titulocontato}}</span>
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;font-weight: 400 ;letter-spacing: 0px ;text-transform: none ;color: #b1976b ;">Deixe-nos te ajudar! Ligue : {{$dados->telefone}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                    <div class=gdlr-core-text-box-item-content style="text-transform: none ;color: #ffffff ;">
                                        <div style="margin-left: 12px; margin-right: 0px; display: inline;"><i class="fa fa-envelope-open-o" style="font-size: 14px ;color: #b1976b ;margin-right: 10px ;"></i>{{$dados->email}}</div>
                                        <div style="margin-left: 9px; margin-right: 13px; display: inline;">· <i class=icon_clock_alt style="font-size: 15px ;color: #b1976b ;margin-right: 10px ;"></i>{{$dados->atendimento}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align gdlr-core-style-vertical" style="margin-bottom: 50px ;">
                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;height: 30px ;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
