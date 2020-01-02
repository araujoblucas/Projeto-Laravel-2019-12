<!DOCTYPE html>
<html lang=en-US class=no-js>
<?php
    use App\Contact;
    $dados = Contact::find(1);

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

        <div class=attorna-page-wrapper id=attorna-page-wrapper>
            <div class=gdlr-core-page-builder-body>
                <div class="gdlr-core-pbf-wrapper " style="padding: 280px 0px 160px 0px;" id=gdlr-core-wrapper-1>
                    <div class=gdlr-core-pbf-background-wrap>
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{$dados->imagem}}) ;background-size: cover ;background-position: center ;" data-parallax-speed=0.3></div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js " data-gdlr-animation=fadeInUp data-gdlr-animation-duration=600ms data-gdlr-animation-offset=0.8>
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 75px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;">{{$dados->titulo}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 25px ;font-style: normal ;color: #f2f2f2 ;margin-top: 25px ;">{{$dados->subtitulo}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 40px 0px 35px 0px;" data-skin="White Text">
                    <div class=gdlr-core-pbf-background-wrap style="background-color: #161616 ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation=fadeInUp data-gdlr-animation-duration=600ms data-gdlr-animation-offset=0.8>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><i class=" gdlr-core-icon-item-icon fa fa-phone" style="color: #ffffff ;font-size: 40px ;min-width: 40px ;min-height: 40px ;"></i></div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;letter-spacing: 0px ;text-transform: none ;">Telefone<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                <div class=gdlr-core-text-box-item-content style="font-size: 16px ;">
                                                    <p>{{$dados->desctelefone}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                <div class=gdlr-core-text-box-item-content style="font-size: 16px ;text-transform: none ;">
                                                    <p><a href=#>{{$dados->telefone}}</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation=fadeInDown data-gdlr-animation-duration=600ms data-gdlr-animation-offset=0.8>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><i class=" gdlr-core-icon-item-icon fa fa-envelope-o" style="color: #ffffff ;font-size: 40px ;min-width: 40px ;min-height: 40px ;"></i></div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;letter-spacing: 0px ;text-transform: none ;">Email<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                <div class=gdlr-core-text-box-item-content style="font-size: 16px ;">
                                                    <p>{{$dados->descemail}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                <div class=gdlr-core-text-box-item-content style="font-size: 16px ;">
                                                    <p><a href="mailto:{{$dados->email}}">{{$dados->email}}</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation=fadeInUp data-gdlr-animation-duration=600ms data-gdlr-animation-offset=0.8>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><i class=" gdlr-core-icon-item-icon fa fa-location-arrow" style="color: #ffffff ;font-size: 40px ;min-width: 40px ;min-height: 40px ;"></i></div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;letter-spacing: 0px ;text-transform: none ;">Localização<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                <div class=gdlr-core-text-box-item-content style="font-size: 16px ;">
                                                    <p>{{$dados->localizacao}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                <div class=gdlr-core-text-box-item-content style="font-size: 16px ;">
                                                    <p><a href="{{$dados->linklocalizacao}}">Localização no Google Maps</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 90px 0px 20px 0px;">
                    <div class=gdlr-core-pbf-background-wrap style="background-color: #f3f3f3 ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " style="max-width: 760px ;">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 39px ;letter-spacing: 0px ;text-transform: none ;">{{$dados->messagetitulo}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 19px ;font-style: normal ;">{{$dados->messagedesc}}</span></div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                                <div role=form class=wpcf7 id=wpcf7-f1979-p1964-o1 lang=en-US dir=ltr>
                                                    <div class=screen-reader-response></div>
                                                        <form class="quform" action="plugins/quform/process.php" method="post" enctype="multipart/form-data" onclick="">

                                                            <div class="quform-elements">
                                                                <div class="quform-element">

                                                                        <br>
                                                                        <span class="wpcf7-form-control-wrap your-name">
                                                                            <input id="name" type="text" name="name" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Nome*">
                                                                        </span>

                                                                </div>
                                                                <div class="quform-element">

                                                                        <br>
                                                                        <span class="wpcf7-form-control-wrap your-email">
                                                                            <input id="email" type="text" name="email" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Email*">
                                                                        </span>

                                                                </div>
                                                                <div class="quform-element">

                                                                        <br>
                                                                        <span class="wpcf7-form-control-wrap your-message">
                                                                            <textarea  id="message" name="message" cols="40" rows="10" class="input1" aria-invalid="false" placeholder="Mensagem*"></textarea>
                                                                        </span>

                                                                </div>

                                                                <!-- Begin Submit button -->
                                                                <div class="quform-submit">
                                                                    <div class="quform-submit-inner">
                                                                        <button type="submit" class="submit-button"><span>Enviar</span></button>
                                                                    </div>
                                                                    <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                                </div>

                                                            </div>
                                                        </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 50px 0px;">
                    <div class=gdlr-core-pbf-background-wrap style="background-color: #ffffff ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-item-pdlr">

                                    <a href=mailto:{{$dados->email}} target=_blank class=gdlr-core-social-network-icon title=email style="font-size: 20px ;color: #1e1e1e ;"><i class="fa fa-envelope" ></i></a>
                                    <?php if($dados->facebook){ ?> <a href="{{$dados->facebook}}" target=_blank class=gdlr-core-social-network-icon title=facebook style="font-size: 20px ;color: #1e1e1e ;margin-left: 40px ;"><i class="fa fa-facebook" ></i></a> <?php } ?>
                                    <?php if($dados->google){ ?> <a href="{{$dados->google}}" target=_blank class=gdlr-core-social-network-icon title=google-plus style="font-size: 20px ;color: #1e1e1e ;margin-left: 40px ;"><i class="fa fa-google-plus" ></i></a> <?php } ?>
                                    <?php if($dados->skype){ ?> <a href="{{$dados->skype}}" target=_blank class=gdlr-core-social-network-icon title=skype style="font-size: 20px ;color: #1e1e1e ;margin-left: 40px ;"><i class="fa fa-skype" ></i></a> <?php } ?>
                                    <?php if($dados->twitter){ ?> <a href="{{$dados->twitter}}" target=_blank class=gdlr-core-social-network-icon title=twitter style="font-size: 20px ;color: #1e1e1e ;margin-left: 40px ;"><i class="fa fa-twitter" ></i></a> <?php } ?>
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
<script type="text/javascript" src="plugins/quform/js/plugins.js"></script>
<script type="text/javascript" src="plugins/quform/js/scripts.js"></script>


</body>
</html>
