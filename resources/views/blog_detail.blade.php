@include('frontend/head2')
<body class="post-template-default single single-post postid-1081 single-format-standard custom-background wp-custom-logo no-sidebar-full-width wide better-responsive-menu">
<div id="page" class="hfeed site">
		<header id="masthead" class="site-header clearfix">
		<div id="header-text-nav-container" class="clearfix">

			<nav id="site-navigation" class="main-navigation clearfix" role="navigation">

				<div class="inner-wrap clearfix">
				<div id="header-logo-image">
                <?php

                  $link = Lang::getLocale();
                  if($link == 'tr')
                 {
                    $link = " ";
                 }

                 ?>

								<a href="/{{$link}}" class="custom-logo-link" rel="home"><img width="150" height="45" src="../../assets/images/logos.png" class="custom-logo" alt="Kontrolmatik" /></a>							</div><!-- #header-logo-image -->
					               <h4 class="menu-toggle"></h4>

                  @if(Lang::getLocale() == 'en')
                   {{menu('main','bootstrap')}}

                     @elseif(Lang::getLocale() == 'tr')
                   {{menu('main_tr','bootstrap')}}



                  @elseif(Lang::getLocale() == 'fr')
                   {{menu('main_fr','bootstrap')}}


                  @elseif(Lang::getLocale() == 'ar')
                   {{menu('main_ar','bootstrap')}}

                  @endif


            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown languagebtn">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{Lang::get('home.lang')}} </a>
                  <ul class="dropdown-menu language-drop">
                  <li>
                            <a href="/blog"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.tr')}} </a>
                        </li>
                      <li>
                          <a href="/en/blog"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.eng')}} </a>
                      </li>
                      <li>
                        <a href="#"><span class="flag-icon flag-icon-fr"></span>  {{Lang::get('home.fr')}} </a>
                      </li>
                     <li>
                          <a href="#"><span class="flag-icon flag-icon-ru"></span> {{Lang::get('home.ar')}}</a>
                      </li>
                  </ul>
              </li>
          </ul>




               </div>
               </div>
			</nav>
		</div>


	</header>

        @foreach($blog_detail as $blog_detail)
            <?php

              $link2 = Lang::getLocale();
						

              if($link2 == 'tr')
             {
                $link2 = "";

             }
             else{
                 $link2 .='/';
             }


           ?>

  
  <link rel="alternate" hreflang="{{Lang::getLocale()}}" href="/{{$link2}}{{Lang::get('home.blog-detail-link')}}/{{$blog_detail->slug}}" />
  <link rel="canonical" href="/{{$link2}}{{Lang::get('home.blog-detail-link')}}/{{$blog_detail->slug}}">
  <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "BlogPosting",
        "headline": "<?php echo $blog_detail->title?>",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://kontrolmatik.com/en/<?php echo $blog_detail->slug?>"},
        "author": "Kontrolmatik",
        "description": "<?php echo $blog_detail->excerpt?>",
        "publisher": {
            "@type": "Organization",
            "name": "https://www.kontrolmatik.com",
            "logo": {
                "@type": "ImageObject",
                "url": "/assets/images/logo-sv.png"
            }
        },
        "image": {
            "@type": "ImageObject",
            "url": "/main-laravel/laravel/storage/app/public/<?php echo $blog_detail->image?>" // İçeriğin öne çıkan görselinin linki bu alana eklenmelidir.
        },
        "datePublished": "<?php echo $blog_detail->created_at  ?>",
        "dateModified": "<?php echo $blog_detail->updated_at  ?>"
        }
    </script>
   <div id="main" class="clearfix">
	<div class="inner-wrap clearfix">
	 <div id="primary">
		<div id="content" class="clearfix">
          <header class="entry-header">
      <h3 class="entry-title">
        {{$blog_detail->title}}
    </h3>

     {{$blog_detail->meta_description}}
      </header>

      <article id="post-1081" class="post-1081 post type-post status-publish format-standard has-post-thumbnail hentry category-asset-management category-industry-4-0 category-internet-of-things category-kontrolmatik category-scada category-varlik-yonetimi">
        {!! Markdown::convertToHtml($blog_detail->body) !!}
	  <div class="featured-image">
      @foreach(json_decode($blog_detail->meta_keywords, true) as $images)
   <div class="above-entry-meta" style="float:left"><span class="cat-links"><a href="javascript:void(0)"  rel="category tag">{{$images}}</a>&nbsp;</span></div>
   @endforeach

   <!--FEatureD İmage ile fotograf gözükmesi işlemi-->
               <!--<img width="1200" height="445" src="../../main-laravel/laravel/storage/app/public/{{$blog_detail->image}}" class="attachment-colormag-featured-image size-colormag-featured-image wp-post-image" alt="" />            </div>-->
      <div class="article-content clearfix">

   


   	<div class="entry-content clearfix">

<p>

<div class = 'socialMediaOnEveryPost'><div id="sgmbShare1-1" class="sgmbShare jssocials-theme-classic sgmbWidget1-1"></div><div class="dropdownWrapper dropdownWrapper1 dropdownWrapper-for-widget " id="dropdownWrapper-for-widget">
						<div class="dropdownLabel" id="dropdownLabel-share-list"><span class="sgmbButtonListLabel1">Share List</span></div>
						<div class="dropdownPanel dropdownPanel1-1">
						</div>
					</div><script>  SGMB_URL = "../wp-content/plugins/social-media-builder/index.html"; jQuery(".dropdownWrapper").hide(); SGMB_GOOGLE_ACOUNT = ""; </script>
		<script type="text/javascript">
		jQuery(document).ready(function($){var widget = new SGMBWidget();widget.show({"id":"1","title":"Social Media","options":{"currentUrl":"1","url":"","shareText":"","fontSize":"12","betweenButtons":"1px","theme":"classic","sgmbButtonsPosition":"bottomRight","socialTheme":"","icon":"default","buttonsPanelEffect":"shake","buttonsEffect":"No Effect","iconsEffect":"No Effect","buttons":"{\"facebook\":{\"label\":\"Share\",\"icon\":\"default-facebook\"},\"twitter\":{\"label\":\"Tweet\",\"icon\":\"default-twitter\",\"via\":\"\",\"hashtags\":\"\"},\"linkedin\":{\"label\":\"Share\",\"icon\":\"default-linkedin\"},\"email\":{\"label\":\"E-mail\",\"icon\":\"default-email\"}}","roundButton":"","showLabels":"on","showCounts":"on","showCenter":"","showButtonsAsList":"","sgmbDropdownColor":"","sgmbDropdownLabelFontSize":"14","sgmbDropdownLabelColor":"","showButtonsOnEveryPost":"on","selectedOrExcluded":"","showButtonsOnEveryPage":"","textOnEveryPost":"","showButtonsOnCustomPost":"","textOnCustomPost":"","showButtonsOnMobileDirect":"on","showButtonsOnDesktopDirect":"on","sgmbSelectedPages":[""],"sgmbExcludedPosts":[""],"sgmbSelectedCustomPosts":[],"showButtonsInPopup":"","titleOfPopup":"","descriptionOfPopup":"","showPopupOnLoad":"","showPopupOnScroll":"","showPopupOnExit":"","openSecondsOfPopup":"","googleAnaliticsAccount":""},"buttonOptions":{"facebook":{"label":"Share","icon":"default-facebook"},"twitter":{"label":"Tweet","icon":"default-twitter","via":"","hashtags":""},"linkedin":{"label":"Share","icon":"default-linkedin"},"email":{"label":"E-mail","icon":"default-email"}},"button":["facebook","twitter","linkedin","email"]}, 1, '', '../wp-content/uploads/2019/06/4-1c85d.jpg', '', 'index.html'); });
	    </script>
	    </div>
	    <script> jQuery(".socialMediaOnEveryPost").addClass("sgmb-right") </script></div>

   </div>

	</article>

		</div><!-- #content -->


		<!--<ul class="default-wp-page clearfix">
			<li class="next"><a href="../{{$blog_detail->id+1}}/{{$blog_detail->category_id}}" rel="next"><span class="meta-nav">&larr;</span> Next Pages</a></li>
			<li class="next"></li>
		</ul>
	     -->

	     <input onclick="history.back();" type="button" value="<<< {{Lang::get('home.back')}}">

	</div><!-- #primary -->


		</div><!-- .inner-wrap -->
	</div><!-- #main -->
   @endforeach()


   @include('frontend/head-footer')
