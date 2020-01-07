<!DOCTYPE html>
<html lang=en-US class=no-js>
<?php
 use App\Gallery;
 $dados = Gallery::find(1);

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
   @component('layouts.mobile.header');
   @endcomponent
</div>
<div class="attorna-body-outer-wrapper ">
    @component('layouts.header');
    @endcomponent

        <div class="attorna-page-title-wrap  attorna-style-custom attorna-center-align">
            <div class=attorna-header-transparent-substitute></div>
            <div class=attorna-page-title-overlay></div>
            <div class="attorna-page-title-container attorna-container">
                <div class="attorna-page-title-content attorna-item-pdlr">
                    <h1 class="attorna-page-title">{{$dados->titulo}}</h1></div>
            </div>
        </div>

        <div class=attorna-page-wrapper id=attorna-page-wrapper>
            <div class=gdlr-core-page-builder-body>
                <?php if($dados->booleangrid) { ?>
                <div class="gdlr-core-pbf-wrapper " style="padding: 100px 20px 30px 20px;">
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px ;">
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="text-transform: none ;">{{$dados->titulogrid}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;">{{$dados->subtitulogrid}}</span></div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-grid">
                                    <div class="gdlr-core-gallery-item-holder gdlr-core-js-2 clearfix" data-layout=fitrows>
                                        <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr gdlr-core-item-mgb">
                                            <?php if($dados->imagemgrid1){?>
                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="{{$dados->imagemgrid1}}" data-lightbox-group=gdlr-core-img-group-1><img src={{$dados->imagemgrid1}} alt width=700 height=660 title=page124><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"  ></i></span></a>
                                            </div>
                                            <?php } ?>
                                            <?php if($dados->imagemgrid2){?>
                                        </div>
                                        <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="{{$dados->imagemgrid2}}" data-lightbox-group=gdlr-core-img-group-1><img src={{$dados->imagemgrid2}} alt width=700 height=660 title=page126><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"  ></i></span></a>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php if($dados->imagemgrid3){?>
                                        <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="{{$dados->imagemgrid3}}" data-lightbox-group=gdlr-core-img-group-1><img src={{$dados->imagemgrid3}} alt width=700 height=660 title=patrick-fore-379185-unsplash><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"  ></i></span></a>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php if($dados->imagemgrid4){?>
                                        <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="{{$dados->imagemgrid4}}" data-lightbox-group=gdlr-core-img-group-1><img src={{$dados->imagemgrid4}} alt width=700 height=660 title=sebastian-pichler-25154-unsplash><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"  ></i></span></a>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php if($dados->booleanhorizontal) { ?>
                <div class="gdlr-core-pbf-wrapper " style="padding: 120px 20px 50px 20px;">
                    <div class=gdlr-core-pbf-background-wrap style="background-color: #f7f7f7 ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px ;">
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="text-transform: none ;">{{$dados->titulohorizontal}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;">{{$dados->subtitulohorizontal}}</span></div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-thumbnail gdlr-core-item-pdlr ">
                                    <div class="gdlr-core-gallery-with-thumbnail-wrap gdlr-core-inside-slider">
                                        <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type=slider data-effect=default data-nav=none data-thumbnail=1>
                                            <ul class=slides>
                                                <li>
                                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                        <a class="gdlr-core-lightgallery gdlr-core-js " href="{{$dados->imagemhorizontal1}}" data-lightbox-group=gdlr-core-img-group-5><img src="{{$dados->imagemhorizontal1}}" alt width=1500 height=1000 title=patrick-fore-379185-unsplash><span class="gdlr-core-image-overlay  gdlr-core-gallery-image-overlay gdlr-core-center-align"><span class=gdlr-core-image-overlay-content ><span class="gdlr-core-image-overlay-title gdlr-core-title-font" >{{$dados->legendahorizontal1}}</span></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                        <a class="gdlr-core-lightgallery gdlr-core-js " href="{{$dados->imagemhorizontal2}}" data-lightbox-group=gdlr-core-img-group-5><img src="{{$dados->imagemhorizontal2}}" alt width=1500 height=1000 title=sebastian-pichler-25154-unsplash><span class="gdlr-core-image-overlay  gdlr-core-gallery-image-overlay gdlr-core-center-align"><span class=gdlr-core-image-overlay-content ><span class="gdlr-core-image-overlay-title gdlr-core-title-font" >{{$dados->legendahorizontal2}}</span></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                        <a class="gdlr-core-lightgallery gdlr-core-js " href="{{$dados->imagemhorizontal3}}" data-lightbox-group=gdlr-core-img-group-5><img src="{{$dados->imagemhorizontal3}}" alt width=1500 height=1000 title=gabriel-ghnassia-27058-unsplash><span class="gdlr-core-image-overlay  gdlr-core-gallery-image-overlay gdlr-core-center-align"><span class=gdlr-core-image-overlay-content ><span class="gdlr-core-image-overlay-title gdlr-core-title-font" >{{$dados->legendahorizontal3}}</span></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <?php if($dados->imagemhorizontal4) { ?>
                                                <li>
                                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                        <a class="gdlr-core-lightgallery gdlr-core-js " href="{{$dados->imagemhorizontal4}}" data-lightbox-group=gdlr-core-img-group-5><img src="{{$dados->imagemhorizontal4}}" alt width=1500 height=1000 title=giammarco-boscaro-380898-unsplash><span class="gdlr-core-image-overlay  gdlr-core-gallery-image-overlay gdlr-core-center-align"><span class=gdlr-core-image-overlay-content ><span class="gdlr-core-image-overlay-title gdlr-core-title-font" >{{$dados->legendahorizontal4}}</span></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <?php } ?>
                                                <?php if($dados->imagemhorizontal5) { ?>
                                                <li>
                                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                        <a class="gdlr-core-lightgallery gdlr-core-js " href="{{$dados->imagemhorizontal5}}" data-lightbox-group=gdlr-core-img-group-5><img src="{{$dados->imagemhorizontal5}}" alt width=1500 height=1000 title=giammarco-boscaro-378319-unsplash><span class="gdlr-core-image-overlay  gdlr-core-gallery-image-overlay gdlr-core-center-align"><span class=gdlr-core-image-overlay-content ><span class="gdlr-core-image-overlay-title gdlr-core-title-font" >{{$dados->legendahorizontal5}}</span></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <div class="gdlr-core-sly-slider gdlr-core-js-2">
                                            <ul class=slides>
                                                <li class="gdlr-core-gallery-list gdlr-core-item-mglr">
                                                    <div class=gdlr-core-media-image><img src={{$dados->imagemhorizontal1}} alt width=300 height=200 title={{$dados->legendahorizontal1}}></div>
                                                </li>
                                                <li class="gdlr-core-gallery-list gdlr-core-item-mglr">
                                                    <div class=gdlr-core-media-image><img src={{$dados->imagemhorizontal2}} alt width=300 height=200 title={{$dados->legendahorizontal2}}></div>
                                                </li>
                                                <li class="gdlr-core-gallery-list gdlr-core-item-mglr">
                                                    <div class=gdlr-core-media-image><img src={{$dados->imagemhorizontal3}} alt width=300 height=200 title={{$dados->legendahorizontal3}}></div>
                                                </li>
                                                <?php if($dados->imagemhorizontal4) { ?>
                                                <li class="gdlr-core-gallery-list gdlr-core-item-mglr">
                                                    <div class=gdlr-core-media-image><img src={{$dados->imagemhorizontal4}} alt width=300 height=200 title={{$dados->legendahorizontal4}}></div>
                                                </li>
                                                <?php } ?>
                                                <?php if($dados->imagemhorizontal5) { ?>
                                                <li class="gdlr-core-gallery-list gdlr-core-item-mglr">
                                                    <div class=gdlr-core-media-image><img src={{$dados->imagemhorizontal5}} alt width=300 height=200 title={{$dados->legendahorizontal5}}></div>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
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
