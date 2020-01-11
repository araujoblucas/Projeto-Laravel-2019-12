<!DOCTYPE html>
<html lang=en-US class=no-js>


<head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1">

    <title>{{$post->titulo}}</title>


    <link rel=stylesheet href='..\plugins/goodlayers-core/plugins/combine/style.css' type=text/css media=all>
    <link rel=stylesheet href='..\plugins/goodlayers-core/include/css/page-builder.css' type=text/css media=all>
    <link rel=stylesheet href='..\plugins/revslider/public/assets/css/settings.css' type=text/css media=all>
    <link rel=stylesheet href='..\css/style-core.css' type=text/css media=all>
    <link rel=stylesheet href='..\css/attorna-style-custom.css' type=text/css media=all>
    <link rel=stylesheet href='..\plugins/revslider/public/assets/fonts/font-awesome/css/font-awesome.css' type=text/css media=all>

    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMerriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext%2Cdevanagari%2Ccyrillic-ext%2Cvietnamese%2Ccyrillic&amp;' type=text/css media=all>


</head>
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js attorna-body attorna-body-front attorna-full  attorna-with-sticky-navigation  attorna-blockquote-style-1 gdlr-core-link-to-lightbox" data-home-url=index.html>

@component('..\layouts.header')
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

                            <div class="attorna-single-nav-area clearfix">
                                <span class="attorna-single-nav attorna-single-nav-left">
                                    <span class="attorna-text attorna-title-font" >Post Anterior</span>
                                    <a href=# rel=prev>
                                        <span class="attorna-single-nav-title attorna-title-font" >Video Post Format</span>
                                    </a>
                                </span>
                                <span class="attorna-single-nav attorna-single-nav-right">
                                    <span class="attorna-text attorna-title-font" >Next Post</span>
                                    <a href=# rel=next>
                                        <span class="attorna-single-nav-title attorna-title-font" >Audio Post Format</span>
                                    </a>
                                </span>
                            </div>

                            <div class="attorna-single-social-share clearfix">
                                <div class="gdlr-core-social-share-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-social-share-left-text gdlr-core-style-plain" style="padding-bottom: 0px ;">
                                    <span class="gdlr-core-social-share-count gdlr-core-skin-title">
                                        <span class=gdlr-core-count >0</span>
                                        <span class=gdlr-core-suffix>Shares</span>
                                        <span class="gdlr-core-divider gdlr-core-skin-divider"></span>
                                    </span>
                                    <span class=gdlr-core-social-share-wrap>
                                        <a class=gdlr-core-social-share-facebook href="#" target=_blank >
                                            <i class="fa fa-facebook" ></i>
                                        </a>
                                        <a class=gdlr-core-social-share-google-plus href="#" target=_blank >
                                            <i class="fa fa-google-plus" ></i>
                                        </a>
                                        <a class=gdlr-core-social-share-pinterest href="#" target=_blank >
                                            <i class="fa fa-pinterest-p" ></i>
                                        </a>
                                        <a class=gdlr-core-social-share-twitter href="#" target=_blank  >
                                            <i class="fa fa-twitter" ></i>
                                        </a>
                                    </span>
                                </div>
                                <div class="attorna-single-magazine-author-tags clearfix"></div>
                            </div>
                            <div class=clear></div>

                            <div class="attorna-single-related-post-wrap attorna-item-rvpdlr">
                                <h3 class="attorna-single-related-post-title attorna-item-mglr">Related Posts</h3>
                                <div class="gdlr-core-blog-item-holder clearfix">
                                    <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-30 gdlr-core-column-first">
                                        <div class="gdlr-core-blog-grid gdlr-core-style-3  gdlr-core-with-thumbnail">
                                            <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                <a href=#><img src=upload/drew-beamer-679505-unsplash-1100x490.jpg alt width=1100 height=490 title=drew-beamer-679505-unsplash></a>
                                            </div>
                                            <div class=gdlr-core-blog-grid-content-wrap>
                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 16px ;"><a href=# >Domestic Violence in California &#8211; How a Lawyer Can Help</a></h3>
                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_clock_alt ></i></span><a href=#>Feb 28, 2019</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_documents_alt ></i></span><a href=# title="Posts by James Smith" rel=author>James Smith</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-30">
                                        <div class="gdlr-core-blog-grid gdlr-core-style-3  gdlr-core-with-thumbnail">
                                            <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                <a href=#><img src=upload/rawpixel-804738-unsplash-1100x490.jpg alt width=1100 height=490 title=rawpixel-804738-unsplash></a>
                                            </div>
                                            <div class=gdlr-core-blog-grid-content-wrap>
                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 16px ;"><a href=# >Filing a Claim against a Cruise Ship Contractual Limitations</a></h3>
                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_clock_alt ></i></span><a href=#>Feb 28, 2019</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_documents_alt ></i></span><a href=# title="Posts by James Smith" rel=author>James Smith</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class=" attorna-sidebar-right attorna-column-20 attorna-line-height attorna-line-height">
                        <div class="attorna-sidebar-area attorna-item-pdlr">
                            <div id=gdlr-core-recent-post-widget-2 class="widget widget_gdlr-core-recent-post-widget attorna-widget">
                                <h3 class="attorna-widget-title">Recent Articles</h3><span class=clear></span>
                                <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">
                                    <div class="gdlr-core-recent-post-widget clearfix">
                                        <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src=upload/drew-beamer-679505-unsplash-150x150.jpg alt width=150 height=150 title=drew-beamer-679505-unsplash></div>
                                        <div class=gdlr-core-recent-post-widget-content>
                                            <div class=gdlr-core-recent-post-widget-title><a href=#>Domestic Violence in California &#8211; How a Lawyer Can Help</a></div>
                                            <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class=gdlr-core-head ><i class=icon_clock_alt ></i></span><a href=#>Feb 28, 2019</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class=gdlr-core-head ><i class=icon_documents_alt ></i></span><a href=# title="Posts by James Smith" rel=author>James Smith</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-recent-post-widget clearfix">
                                        <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src=upload/rawpixel-804738-unsplash-150x150.jpg alt width=150 height=150 title=rawpixel-804738-unsplash></div>
                                        <div class=gdlr-core-recent-post-widget-content>
                                            <div class=gdlr-core-recent-post-widget-title><a href=#>Filing a Claim against a Cruise Ship Contractual Limitations</a></div>
                                            <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class=gdlr-core-head ><i class=icon_clock_alt ></i></span><a href=#>Feb 28, 2019</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class=gdlr-core-head ><i class=icon_documents_alt ></i></span><a href=# title="Posts by James Smith" rel=author>James Smith</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-recent-post-widget clearfix">
                                        <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src=upload/rawpixel-1135753-unsplash-150x150.jpg alt width=150 height=150 title=rawpixel-1135753-unsplash></div>
                                        <div class=gdlr-core-recent-post-widget-content>
                                            <div class=gdlr-core-recent-post-widget-title><a href=#>Day Care Responsibility to Protect Children</a></div>
                                            <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class=gdlr-core-head ><i class=icon_clock_alt ></i></span><a href=#>Feb 28, 2019</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class=gdlr-core-head ><i class=icon_documents_alt ></i></span><a href=# title="Posts by James Smith" rel=author>James Smith</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id=tag_cloud-1 class="widget widget_tag_cloud attorna-widget">
                                <h3 class="attorna-widget-title">Tag Cloud</h3>
                                <span class=clear></span>
                                <div class=tagcloud>
                                    <a href=# class="tag-cloud-link tag-link-86 tag-link-position-1" style="font-size: 18.5pt;" aria-label="Antitrust (3 items)">Antitrust</a>
                                    <a href=# class="tag-cloud-link tag-link-92 tag-link-position-2" style="font-size: 8pt;" aria-label="Bankruptcy (1 item)">Bankruptcy</a>
                                    <a href=# class="tag-cloud-link tag-link-83 tag-link-position-3" style="font-size: 14.3pt;" aria-label="Employment (2 items)">Employment</a>
                                    <a href=# class="tag-cloud-link tag-link-81 tag-link-position-4" style="font-size: 22pt;" aria-label="Family (4 items)">Family</a>
                                    <a href=# class="tag-cloud-link tag-link-85 tag-link-position-5" style="font-size: 18.5pt;" aria-label="General Practice (3 items)">General Practice</a>
                                    <a href=# class="tag-cloud-link tag-link-91 tag-link-position-6" style="font-size: 8pt;" aria-label="Immigration (1 item)">Immigration</a>
                                    <a href=# class="tag-cloud-link tag-link-82 tag-link-position-7" style="font-size: 8pt;" aria-label="Law (1 item)">Law</a>
                                    <a href=# class="tag-cloud-link tag-link-99 tag-link-position-8" style="font-size: 8pt;" aria-label="Nonprofit (1 item)">Nonprofit</a>
                                    <a href=# class="tag-cloud-link tag-link-87 tag-link-position-9" style="font-size: 8pt;" aria-label="Personal Injury (1 item)">Personal Injury</a>
                                    <a href=# class="tag-cloud-link tag-link-100 tag-link-position-10" style="font-size: 18.5pt;" aria-label="Property (3 items)">Property</a>
                                </div>
                            </div>
                            <div id=text-4 class="widget widget_text attorna-widget">
                                <h3 class="attorna-widget-title">Text Widget</h3><span class=clear></span>
                                <div class=textwidget>Nulla vitae elit libero, a pharetra augue. Nulla vitae elit libero, a pharetra augue. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui. Etiam porta sem malesuada.</div>
                            </div>
                            <div id=gdlr-core-custom-menu-widget-5 class="widget widget_gdlr-core-custom-menu-widget attorna-widget">
                                <h3 class="attorna-widget-title">Practice Areas</h3><span class=clear></span>
                                <div class=menu-practice-areas-container>
                                    <ul id=menu-practice-areas class="gdlr-core-custom-menu-widget gdlr-core-menu-style-list">
                                        <li class="menu-item"><a href=#>Coporate &#038; Securities</a></li>
                                        <li class="menu-item"><a href=#>Real Estate Law</a></li>
                                        <li class="menu-item"><a href=#>Health Care Law</a></li>
                                        <li class="menu-item"><a href=#>Insurance Law</a></li>
                                        <li class="menu-item"><a href=#>Construction &#038; Engineering</a></li>
                                        <li class="menu-item"><a href=#>Ecommerce Law</a></li>
                                        <li class="menu-item"><a href=#>Private Fund</a></li>
                                        <li class="menu-item"><a href=#>Power &#038; Energy</a></li>
                                        <li class="menu-item"><a href=#>Lending Law</a></li>
                                    </ul>
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
