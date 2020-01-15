<!DOCTYPE html>
<html lang=en-US class=no-js>
<?php
    use App\Blog;
    $dados = Blog::find(1);

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
                    <h1 class="attorna-page-title">{{$dados->titulo}}</h1>
                    <div class=attorna-page-caption>{{$dados->subtitulo}}</div>
                </div>
            </div>
        </div>
        <div class=attorna-page-wrapper id=attorna-page-wrapper>
            <div class=gdlr-core-page-builder-body>
                <div class="gdlr-core-pbf-wrapper " style="padding: 60px 0px 15px 0px;">
                    <div class=gdlr-core-pbf-background-wrap style="background-color: #f7f7f7 ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-column-with-frame" style="padding-bottom: 40px ;">
                                    <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout=fitrows>


                                @foreach($posts as $post)
                                        <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-20">
                                            <div class="gdlr-core-blog-grid gdlr-core-style-3 gdlr-core-js  gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background  gdlr-core-with-thumbnail" data-sync-height=blog-item-1>
                                                <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                    <a href={{route('post_show', $post->id)}}><img src={{$post->img}} alt width=700 height=660 title=drew-beamer-679505-unsplash></a>
                                                </div>
                                                <div class="gdlr-core-blog-grid-frame gdlr-core-sync-height-space-position">
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 16px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="{{route('post_show', $post->id)}}" >{{$post->titulo}}</a></h3>
                                                    <div class=gdlr-core-blog-content>{{$post->desctitulo}}
                                                        <div class=clear></div>
                                                    </div>
                                                        <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_clock_alt ></i></span><a href=#><?php  echo $post->created_at->format('M d, y'); ?></a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_documents_alt ></i></span>{{$post->autor}}</span>
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
<script type='text/javascript' src='js/isotope.js'></script>

</body>
</html>
