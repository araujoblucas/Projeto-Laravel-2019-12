<!DOCTYPE html>
<html lang=en-US class=no-js>


<head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1">

    <title>Home</title>


    <link rel=stylesheet href='plugins/goodlayers-core/plugins/combine/style.css' type=text/css media=all>
    <link rel=stylesheet href='plugins/goodlayers-core/include/css/page-builder.css' type=text/css media=all>
    <link rel=stylesheet href='plugins/revslider/public/assets/css/settings.css' type=text/css media=all>
    <link rel=stylesheet href='css/style-core.css' type=text/css media=all>
    <link rel=stylesheet href='css/attorna-style-custom.php' type=text/css media=all>
	<link rel=stylesheet href='plugins/revslider/public/assets/fonts/font-awesome/css/font-awesome.css' type=text/css media=all>

    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMerriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext%2Cdevanagari%2Ccyrillic-ext%2Cvietnamese%2Ccyrillic&amp;' type=text/css media=all>


</head>
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js attorna-body attorna-body-front attorna-full  attorna-with-sticky-navigation  attorna-blockquote-style-1 gdlr-core-link-to-lightbox" data-home-url=index.html>
    <style>
        <?php
            use App\ConfigDefault;
            $dadosBack = ConfigDefault::findorfail(1);
         ?>
        .attorna-background-pattern .attorna-body-outer-wrapper{ background-image: url({{$dadosBack->generalBackgroundTitle}}); }
        .attorna-page-title-wrap{ background-image: url({{$dadosBack->generalBackgroundTitle}}); }
    </style>
<div class=attorna-mobile-header-wrap>
    @component('layouts.mobile.header')
    @endcomponent
</div>
<div class="attorna-body-outer-wrapper ">

    @component('layouts.header')
    @endcomponent

        <div class=attorna-page-wrapper id=attorna-page-wrapper>
            <div class=gdlr-core-page-builder-body>
                <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                    <div class=gdlr-core-pbf-background-wrap></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">
                                    <div id=rev_slider_1_1_wrapper class="rev_slider_wrapper fullwidthbanner-container" data-source=gallery style="margin:0px auto;background:#202020;padding:0px;margin-top:0px;margin-bottom:0px;">
                                        <div id=rev_slider_1_1 class="rev_slider fullwidthabanner" style="display:none;" data-version=5.4.8.2>
                                            <ul>
                                                <li data-index=rs-1 data-transition=fade data-slotamount=default data-hideafterloop=0 data-hideslideonmobile=off data-easein=default data-easeout=default data-masterspeed=300 data-thumb=upload/slider-1-100x50.jpg data-rotate=0 data-saveperformance=off data-title=Slide data-param1 data-param2 data-param3 data-param4 data-param5 data-param6 data-param7 data-param8 data-param9 data-param10 data-description> <img src=" {{$dados->container1imagem}}" alt title=slider-1 width=1800 height=1000 data-bgposition="center center" data-bgfit=cover data-bgrepeat=no-repeat class=rev-slidebg data-no-retina>
                                                    <div class="tp-caption   tp-resizeme" id=slide-1-layer-1 data-x=center data-hoffset data-y=center data-voffset=-182 data-width="['auto']" data-height="['auto']" data-type=text data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 38px; line-height: 38px; font-weight: 400; color: #b6a281; letter-spacing: 2px;font-family:Poppins;text-transform:uppercase;"> {{$dados->container1titulo}}</div>
                                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id=slide-1-layer-3 data-x=center data-hoffset data-y=center data-voffset=-152 data-width="['103']" data-height="['1']" data-type=shape data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgb(182,162,129);"></div>
                                                    <div class="tp-caption   tp-resizeme" id=slide-1-layer-4 data-x=center data-hoffset data-y=center data-voffset=-80 data-width="['auto']" data-height="['auto']" data-type=text data-responsive_offset="on" data-frames='[{"delay":310,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 102px; line-height: 102px; font-weight: 700; color: #ffffff; letter-spacing: 8px;font-family:Poppins;text-transform:uppercase;"> {{$dados->container1subtitulo}}</div>
                                                    <div class="tp-caption   tp-resizeme" id=slide-1-layer-5 data-x=center data-hoffset data-y=center data-voffset=33 data-width="['610']" data-height="['81']" data-visibility="['on','on','off','off']" data-type=text data-responsive_offset="on" data-frames='[{"delay":530,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 8; min-width: 610px; max-width: 610px; max-width: 81px; max-width: 81px; white-space: normal; font-size: 20px; line-height: 38px; font-weight: 500; color: #dedede; letter-spacing: 0px;font-family:Poppins;"> {{$dados->container1descricao}}</div>

                                                </li>
                                                <li data-index=rs-2 data-transition=fade data-slotamount=default data-hideafterloop=0 data-hideslideonmobile=off data-easein=default data-easeout=default data-masterspeed=300 data-thumb=upload/slider-2-100x50.jpg data-rotate=0 data-saveperformance=off data-title=Slide data-param1 data-param2 data-param3 data-param4 data-param5 data-param6 data-param7 data-param8 data-param9 data-param10 data-description> <img src= {{$dados->container1imagem2}} alt title=slider-2 width=1800 height=1000 data-bgposition="center center" data-bgfit=cover data-bgrepeat=no-repeat class=rev-slidebg data-no-retina>
                                                    <div class="tp-caption   tp-resizeme" id=slide-2-layer-1 data-x=center data-hoffset data-y=center data-voffset=-182 data-width="['auto']" data-height="['auto']" data-type=text data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 38px; line-height: 38px; font-weight: 400; color: #b6a281; letter-spacing: 2px;font-family:Poppins;text-transform:uppercase;"> {{$dados->container1titulo2}}</div>
                                                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id=slide-2-layer-3 data-x=center data-hoffset data-y=center data-voffset=-152 data-width="['103']" data-height="['1']" data-type=shape data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgb(182,162,129);"></div>
                                                    <div class="tp-caption   tp-resizeme" id=slide-2-layer-4 data-x=center data-hoffset data-y=center data-voffset=-80 data-width="['auto']" data-height="['auto']" data-type=text data-responsive_offset="on" data-frames='[{"delay":310,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 102px; line-height: 102px; font-weight: 700; color: #ffffff; letter-spacing: 8px;font-family:Poppins;text-transform:uppercase;"> {{$dados->container1subtitulo2}}</div>
                                                    <div class="tp-caption   tp-resizeme" id=slide-2-layer-5 data-x=center data-hoffset data-y=center data-voffset=33 data-width="['610']" data-height="['81']" data-visibility="['on','on','off','off']" data-type=text data-responsive_offset="on" data-frames='[{"delay":530,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 8; min-width: 610px; max-width: 610px; max-width: 81px; max-width: 81px; white-space: normal; font-size: 20px; line-height: 38px; font-weight: 500; color: #dedede; letter-spacing: 0px;font-family:Poppins;"> {{$dados->container1descricao2}}</div>
                                                </li>
                                            </ul>
                                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="margin: -70px 0px 0px 0px;padding: 0px 0px 0px 0px;" id=gdlr-core-wrapper-1>
                    <div class=gdlr-core-pbf-background-wrap></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=" gdlr-core-pbf-wrapper-container-inner gdlr-core-item-mglr clearfix" style="box-shadow: 0 0 32px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 32px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 32px rgba(10, 10, 10,0.08); background-color: #ffffff ;border-radius: 4px 4px 4px 4px;-moz-border-radius: 4px 4px 4px 4px;-webkit-border-radius: 4px 4px 4px 4px;">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id=gdlr-core-column-1>
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 60px 40px 20px 45px;" data-sync-height=height-about>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class=gdlr-core-pbf-element>
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 8px ;">
                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 16px ;font-weight: 700 ;letter-spacing: 4px ;">{{$dados->container2titulo}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                </div>
                                            </div>
                                            <div class=gdlr-core-pbf-element>
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                                                    <div class=gdlr-core-divider-container style="max-width: 39px ;">
                                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;border-bottom-width: 4px ;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=gdlr-core-pbf-element>
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 15px ;">
                                                    <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                                        <p><?php echo $dados->container2descricao; ?></p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-hide-in-mobile">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " data-sync-height=height-about>
                                        <div class=gdlr-core-pbf-background-wrap style="border-radius: 0px 4px 4px 0px;-moz-border-radius: 0px 4px 4px 0px;-webkit-border-radius: 0px 4px 4px 0px;">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{$dados->container2imagem}}) ;background-size: cover ;background-position: center ;" data-parallax-speed=0></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 95px 0px 30px 0px;">
                    <div class=gdlr-core-pbf-background-wrap></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 13px ;font-weight: 600 ;font-style: normal ;letter-spacing: 3px ;text-transform: uppercase ;color: #a8a8a8 ;">{{$dados->container3titulo}}</span>
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 30px ;font-weight: 700 ;text-transform: none ;">{{$dados->container3subtitulo}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                </div>
                            </div>

                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align gdlr-core-style-vertical" style="margin-bottom: 70px ;">
                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;height: 27px ;"></div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 40px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 38px ;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src={{$dados->container3icone1}} alt width=57 height=56></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">{{$dados->container3titulo1}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                                <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                                    <p>{{$dados->container3descricao1}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 3px 0px 40px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 40px ;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src={{$dados->container3icone2}} alt width=66 height=51 title=hp-icon-2></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">{{$dados->container3titulo2}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                                <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                                    <p>{{$dados->container3descricao2}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 3px 0px 40px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 40px ;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src={{$dados->container3icone3}} alt width=66 height=51 title=></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">{{$dados->container3titulo3}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                                <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                                    <p>{{$dados->container3descricao3}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 40px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 38px ;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src={{$dados->container3icone4}} alt width=53 height=53 title=></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">{{$dados->container3titulo4}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                                <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                                    <p>{{$dados->container3descricao4}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 40px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 38px ;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src={{$dados->container3icone5}} alt width=48 height=53 title=></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">{{$dados->container3titulo5}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                                <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                                    <p>{{$dados->container3descricao5}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 40px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 38px ;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src={{$dados->container3icone6}} alt width=48 height=53 title=></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">{{$dados->container3titulo6}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                                <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                                    <p>{{$dados->container3descricao6}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=gdlr-core-pbf-background-wrap></div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 100px 0px 45px 0px;background-color: #f2f2f2 ;">
                    <div class=gdlr-core-pbf-background-wrap style="bottom: 293px ;">
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{$dados->container4imagem}}) ;background-repeat: repeat ;background-position: center ;" data-parallax-speed=0></div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px ;">
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 30px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;">{{$dados->container4titulo}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 0px ;"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href=" {{route('about_team')}}" style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 10px 33px 15px 33px;"><span class=gdlr-core-content >{{$dados->container4link}}</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align gdlr-core-style-vertical" style="margin-bottom: 55px ;">
                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;height: 27px ;"></div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-personnel-item-style-grid-with-background gdlr-core-personnel-style-grid gdlr-core-with-background gdlr-core-item-pdlr">
                                    <div class="gdlr-core-flexslider flexslider gdlr-core-js-2  gdlr-core-bottom-nav-1" data-type=carousel data-column=3 data-move=1 data-nav=navigation-bottom data-nav-parent=gdlr-core-personnel-item data-disable-autoslide=1>
                                        <ul class=slides>
                                            @foreach($partners as $partner)
                                                <li class=gdlr-core-item-mglr>
                                                    <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix" style="box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                                        <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                                            <a href=#><img src=" {{$partner->image}}" alt width=599 height=500 title= {{$partner->name}}></a>
                                                        </div>
                                                        <div class=gdlr-core-personnel-list-content-wrap>
                                                            <h3 class="gdlr-core-personnel-list-title" style="font-size: 16px ;font-weight: 600 ;letter-spacing: 2px ;margin-bottom: 5px ;"><a href=# > {{$partner->name}}</a></h3>
                                                            <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;"> {{$partner->ocupation}}</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 50px 0px;" data-skin="2018 white">
                    <div class=gdlr-core-pbf-background-wrap></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 12px ;">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 24px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #2c2c2c ;">{{$dados->container5titulo}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align" style="margin-bottom: 20px ;">
                                                <div class=gdlr-core-divider-container style="max-width: 40px ;">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;border-bottom-width: 6px ;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-40">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 20px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                <div class=gdlr-core-text-box-item-content style="font-size: 17px ;font-weight: 400 ;text-transform: none ;color: #6d6d6d ;">
                                                    <p>{{$dados->container4descricao}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 20px 20px 20px 20px;padding: 75px 20px 45px 20px;" data-sync-height=height5>
                                    <div class=gdlr-core-pbf-background-wrap style="border-radius: 3px 3px 3px 3px;-moz-border-radius: 3px 3px 3px 3px;-webkit-border-radius: 3px 3px 3px 3px;">
                                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{$dados->container5background1}}) ;background-size: cover ;background-position: center ;" data-parallax-speed=0></div>
                                    </div>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src={{$dados->container5icone1}} alt width=35 height=50 title=law30></div>
                                                <div class=gdlr-core-column-service-content-wrapper>
                                                    <div class=gdlr-core-column-service-title-wrap>
                                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 15px ;font-weight: 700 ;letter-spacing: 3px ;">{{$dados->container5titulo1}}</h3></div>
                                                    <div class=gdlr-core-column-service-content style="font-weight: 400 ;text-transform: none ;">
                                                        <p>{{$dados->container5descricao1}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 20px 20px 20px 20px;padding: 75px 20px 45px 20px;" data-sync-height=height5>
                                    <div class=gdlr-core-pbf-background-wrap style="border-radius: 3px 3px 3px 3px;-moz-border-radius: 3px 3px 3px 3px;-webkit-border-radius: 3px 3px 3px 3px;">
                                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{$dados->container5background2}}) ;background-size: cover ;background-position: center ;" data-parallax-speed=0></div>
                                    </div>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src={{$dados->container5icone2}} alt width=34 height=46 title=law31></div>
                                                <div class=gdlr-core-column-service-content-wrapper>
                                                    <div class=gdlr-core-column-service-title-wrap>
                                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 15px ;font-weight: 700 ;letter-spacing: 3px ;">{{$dados->container5titulo2}}</h3></div>
                                                    <div class=gdlr-core-column-service-content style="font-weight: 400 ;text-transform: none ;">
                                                        <p>{{$dados->container5descricao2}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 20px 20px 20px 20px;padding: 75px 20px 45px 20px;" data-sync-height=height5>
                                    <div class=gdlr-core-pbf-background-wrap style="border-radius: 3px 3px 3px 3px;-moz-border-radius: 3px 3px 3px 3px;-webkit-border-radius: 3px 3px 3px 3px;">
                                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{$dados->container5background3}}) ;background-size: cover ;background-position: center ;" data-parallax-speed=0></div>
                                    </div>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src={{$dados->container5icone3}} alt width=45 height=45 title=law32></div>
                                                <div class=gdlr-core-column-service-content-wrapper>
                                                    <div class=gdlr-core-column-service-title-wrap>
                                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 15px ;font-weight: 700 ;letter-spacing: 3px ;">{{$dados->container5titulo3}}</h3></div>
                                                    <div class=gdlr-core-column-service-content style="font-weight: 400 ;text-transform: none ;">
                                                        <p>{{$dados->container5descricao3}}</p>
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
                <div class="gdlr-core-pbf-wrapper " style="padding: 145px 0px 150px 0px;" data-skin="Testimonial Dark" id=gdlr-core-wrapper-4>
                    <div class=gdlr-core-pbf-background-wrap>
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{$dados->container6imagem}}) ;background-size: cover ;background-position: center ;" data-parallax-speed=0.1></div>
                    </div>
                    <div class=gdlr-core-pbf-background-frame style="margin: 60px 60px 60px 60px;border-width: 1px 1px 1px 1px;border-style: solid ;border-color: #686868 ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 14px ;font-weight: 600 ;font-style: normal ;letter-spacing: 3px ;text-transform: uppercase ;color: #b1976b ;margin-bottom: 0px ;">Area do Cliente</span>
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 33px ;font-weight: 700 ;text-transform: none ;color: #ffffff ;">O que os nossos clientes dizem<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align gdlr-core-style-vertical" style="margin-bottom: 40px ;">
                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;height: 27px ;"></div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " style="max-width: 820px ;">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-testimonial-item gdlr-core-item-pdb clearfix  gdlr-core-testimonial-style-center gdlr-core-item-pdlr" style="padding-bottom: 0px ;">
                                                <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 gdlr-core-nav-style-middle-large" data-type=carousel data-column=1 data-move=1 data-nav=bullet data-vcenter-nav=1>
                                                    <ul class=slides>
                                                        @foreach($comments as $comment)
                                                            <li class=gdlr-core-item-mglr>
                                                                <div class="gdlr-core-testimonial clearfix">
                                                                    <div class=gdlr-core-testimonial-content-wrap>
                                                                        <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="color: #aa9b7a ;">&#8220;</div>
                                                                        <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 20px ;color: #c9c9c9 ;">
                                                                            <p>{{$comment->frase}}</p>
                                                                        </div>
                                                                        <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                            <div class="gdlr-core-testimonial-author-image gdlr-core-media-image"><img src={{$comment->icone}} alt width=71 height=71 title={{$comment->nome}}></div>
                                                                            <div class=gdlr-core-testimonial-author-content>
                                                                                <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #ffffff ;font-size: 19px ;">{{$comment->nome}}</div>
                                                                                <div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" style="color: #b1a17d ;font-size: 15px ;">{{$comment->ocupacao}}</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 90px 0px 25px 0px;" data-skin="Grey Carousel">
                    <div class=gdlr-core-pbf-background-wrap>
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-size: cover ;background-position: center ;" data-parallax-speed=0.2></div>
                    </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 160px 0px 110px 0px;" data-skin=Newsletter id=gdlr-core-wrapper-3>
                    <div class=gdlr-core-pbf-background-wrap>
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url( {{$sobrenos->imagemcontato}}) ;background-size: cover ;background-position: center ;" data-parallax-speed=0.2></div>
                    </div>
                    <div class=gdlr-core-pbf-background-frame style="margin: 55px 55px 55px 55px;border-width: 1px 1px 1px 1px;border-style: solid ;border-color: #686868 ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 18px ;font-weight: 700 ;font-style: normal ;letter-spacing: 4px ;text-transform: uppercase ;color: #ffffff ;"> {{$sobrenos->titulocontato}}</span>
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;font-weight: 400 ;letter-spacing: 0px ;text-transform: none ;color: #b1976b ;">Deixe-nos te ajudar! Ligue :  {{$sobrenos->telefone}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                    <div class=gdlr-core-text-box-item-content style="text-transform: none ;color: #ffffff ;">
                                        <div style="margin-left: 12px; margin-right: 0px; display: inline;"><i class="fa fa-envelope-open-o" style="font-size: 14px ;color: #b1976b ;margin-right: 10px ;"></i> {{$sobrenos->email}}</div>
                                        <div style="margin-left: 9px; margin-right: 13px; display: inline;">· <i class=icon_clock_alt style="font-size: 15px ;color: #b1976b ;margin-right: 10px ;"></i> {{$sobrenos->atendimento}}</div>
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
                <div class="gdlr-core-pbf-wrapper " style="padding: 100px 0px 65px 0px;" id=gdlr-core-wrapper-6>
                    <div class=gdlr-core-pbf-background-wrap>
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/work-bg.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0.1></div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 15px ;font-weight: 600 ;font-style: normal ;letter-spacing: 3px ;text-transform: uppercase ;color: #a69279 ;margin-bottom: 7px ;">Nosso Blog</span>
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 30px ;font-weight: 700 ;text-transform: none ;color: #2b2b2b ;">Postagens Recentes<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align gdlr-core-style-vertical" style="margin-bottom: 43px ;">
                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;height: 27px ;"></div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-column-with-frame" style="padding-bottom: 15px ;">
                                    <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout=fitrows>
                                        @foreach($recents as $recent)
                                        <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-20">
                                            <div class="gdlr-core-blog-grid gdlr-core-style-3 gdlr-core-js  gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background  gdlr-core-outer-frame-element gdlr-core-with-thumbnail" style="box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;" data-sync-height=blog-item-1>
                                                <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                    <a href={{route('post_show', $recent->id)}}><img src={{$recent->img}} alt width=700 height=450 title={{$recent->titulo}}></a>
                                                </div>
                                                <div class="gdlr-core-blog-grid-frame gdlr-core-sync-height-space-position" style="padding-top: 40px;padding-bottom: 35px;">
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px ;font-weight: 700 ;letter-spacing: 0px ;"><a href={{route('post_show', $recent->id)}} >{{$recent->titulo}}</a></h3>
                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_clock_alt ></i></span><a href=#><?php  echo $recent->created_at->format('M d, y'); ?></a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_documents_alt ></i></span>  {{$recent->autor}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-gradient gdlr-core-button-no-border" href="{{route('blog')}}" style="font-size: 13px ;font-weight: 700 ;letter-spacing: 2px ;color: #ffffff ;padding: 12px 24px 14px 28px;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;background: #b1976b ;"><span class=gdlr-core-content >Visite nosso Blog</span><i class="gdlr-core-pos-right fa fa-long-arrow-right"  ></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @component('layouts.footer')
        @endcomponent
</div>

<script src='js/jquery/jquery.js'></script>
<script src='js/jquery/jquery-migrate.min.js'></script>
<script src='plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
<script src='plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
<script src="plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revslider/public/assets/js/extensions/revolution.extension.video.min.js"></script>

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


<script>
    function setREVStartSize(e) {
        try {
            e.c = jQuery(e.c);
            var i = jQuery(window).width(),
                t = 9999,
                r = 0,
                n = 0,
                l = 0,
                f = 0,
                s = 0,
                h = 0;
            if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                    f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                var u = (e.c.width(), jQuery(window).height());
                if (void 0 != e.fullScreenOffsetContainer) {
                    var c = e.fullScreenOffsetContainer.split(",");
                    if (c) jQuery.each(c, function(e, i) {
                        u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                    }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                }
                f = u
            } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
            e.c.closest(".rev_slider_wrapper").css({
                height: f
            })
        } catch (d) {
            console.log("Failure at Presize of Slider:" + d)
        }
    };
</script>
<script>
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style=font-size:16px;color:#BC0C06;>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
</script>
<script>
    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
    var htmlDivCss = "";
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement("div");
        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
    }
</script>
<script>
    if (setREVStartSize !== undefined) setREVStartSize({
        c: '#rev_slider_1_1',
        gridwidth: [1280],
        gridheight: [750],
        sliderLayout: 'auto'
    });
    var revapi1, tpj;
    (function() {
        if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
        else onLoad();

        function onLoad() {
            if (tpj === undefined) {
                tpj = jQuery;
                if ("off" == "on") tpj.noConflict();
            }
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "//demo.goodlayers.com/attorna/wp-content/plugins/revslider/public/assets/js/",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        }
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1280,
                    gridheight: 750,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            };
        };
    }());
</script>
<script>
    var htmlDivCss = unescape("%23rev_slider_1_1%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%28255%2C255%2C255%2C0%29%3B%0A%20%7D%0A%20%23rev_slider_1_1%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23rev_slider_1_1%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A");
    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement('div');
        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
    }
</script>
</body>
</html>
