<!DOCTYPE html>
<html lang=en-US class=no-js>


<head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1">

    <title>{{$post->titulo}}</title>


    <link rel=stylesheet href='/plugins/goodlayers-core/plugins/combine/style.css' type=text/css media=all>
    <link rel=stylesheet href='/plugins/goodlayers-core/include/css/page-builder.css' type=text/css media=all>
    <link rel=stylesheet href='/plugins/revslider/public/assets/css/settings.css' type=text/css media=all>
    <link rel=stylesheet href='/css/style-core.css' type=text/css media=all>
    <link rel=stylesheet href='/css/attorna-style-custom.css' type=text/css media=all>
    <link rel=stylesheet href='/plugins/revslider/public/assets/fonts/font-awesome/css/font-awesome.css' type=text/css media=all>

    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMerriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext%2Cdevanagari%2Ccyrillic-ext%2Cvietnamese%2Ccyrillic&amp;' type=text/css media=all>


</head>
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js attorna-body attorna-body-front attorna-full  attorna-with-sticky-navigation  attorna-blockquote-style-1 gdlr-core-link-to-lightbox" data-home-url=index.html>

@component('layouts.header')
@endcomponent

        <div class=attorna-page-wrapper id=attorna-page-wrapper>
            <div class="attorna-blog-title-wrap  attorna-style-custom attorna-feature-image" style="background-image: url({{$post->img}}) ;">
                <div class=attorna-header-transparent-substitute></div>
                <div class=attorna-blog-title-overlay style="opacity: 0.01 ;"></div>
                <div class=attorna-blog-title-bottom-overlay></div>
                <div class="attorna-blog-title-container attorna-container">
                    <div class="attorna-blog-title-content attorna-item-pdlr" style="padding-top: 300px ;padding-bottom: 20px ;">
                        <header class="attorna-single-article-head clearfix">
                            <div class=attorna-single-article-head-right>
                                <h1 class="attorna-single-article-title">{{$post->titulo}}</h1>

                                    <div class=attorna-blog-info-wrapper>
                                        <div class="attorna-blog-info attorna-blog-info-font attorna-blog-info-author vcard author post-author ">
                                            <span class=attorna-blog-info-sep>•</span>
                                            <span class=attorna-head>
                                                <i class=icon_documents_alt ></i>
                                            </span>
                                            <span class=fn>
                                                <a href=# title="Posts by James Smith" rel=author>{{$post->autor}}</a>
                                            </span>
                                        </div>
                                        <div class="attorna-blog-info attorna-blog-info-font attorna-blog-info-category ">
                                            <span class=attorna-blog-info-sep>•</span>
                                            <span class=attorna-head>
                                                <i class=icon_folder-alt ></i>
                                            </span>
                                            <a href=# rel=tag>Blog</a>
                                            <span class=gdlr-core-sep>,</span>
                                            <a href=# rel=tag>Post Format</a>
                                        </div>
                                        <div class="attorna-blog-info attorna-blog-info-font attorna-blog-info-comment ">
                                            <span class=attorna-blog-info-sep>•</span>
                                            <span class=attorna-head>
                                                <i class=icon_comment_alt ></i>
                                            </span>
                                            <a href=index.html>no comments</a>
                                        </div>
                                    </div>
                            </div>
                        </header>
                    </div>
                </div>
            </div>
            <div class="attorna-content-container attorna-container  gdlr-core-sticky-sidebar gdlr-core-js">
                <div class=" attorna-sidebar-wrap clearfix attorna-line-height-0 attorna-sidebar-style-right">
                    <div class=" attorna-sidebar-center attorna-column-40 attorna-line-height">
                        <div class="attorna-content-wrap attorna-item-pdlr clearfix">
                            <div class=attorna-content-area>
                                <article id=post-1268 class="post-1268 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-post-format">
                                    <div class="attorna-single-article clearfix">
                                        <div class=attorna-single-article-content>
                                            <ul class="wp-block-gallery aligncenter columns-5 is-cropped">
                                                <?php echo $post->descricao;  ?>
                                            </ul>
                                    </div>
                                </article>
                            </div>

                            <div class="attorna-page-builder-wrap attorna-item-rvpdlr">
                                <div class=gdlr-core-page-builder-body></div>
                            </div>


                            <div class=clear></div>


                        </div>
                    </div>
                    <div class=" attorna-sidebar-right attorna-column-20 attorna-line-height attorna-line-height">
                        <div class="attorna-sidebar-area attorna-item-pdlr">
                            <div id=gdlr-core-recent-post-widget-2 class="widget widget_gdlr-core-recent-post-widget attorna-widget">
                                <h3 class="attorna-widget-title">Publicados Recentemente</h3><span class=clear></span>
                                <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">
                                    @foreach($recents as $recent)
                                        <div class="gdlr-core-recent-post-widget clearfix">
                                            <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src={{$recent->img}} alt width=150 height=150 title=drew-beamer-679505-unsplash></div>
                                            <div class=gdlr-core-recent-post-widget-content>
                                                <div class=gdlr-core-recent-post-widget-title><a href={{route('post_show', $recent->id)}}>{{$recent->titulo}}</a></div>
                                                <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class=gdlr-core-head ><i class=icon_clock_alt ></i></span><?php  echo $recent->created_at->format('M d, y'); ?></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class=gdlr-core-head ><i class=icon_documents_alt ></i></span><a href=# title="Postado por {{$recent->autor}}" rel=author>{{$recent->autor}}</a></span>
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
        @component('..\layouts.footer')
        @endcomponent

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
