@include('frontend/head2')





<body class="home blog custom-background wp-custom-logo  wide better-responsive-menu">
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

                <a href="https://www.kontrolmatik.com/{{Lang::get('home.recaptcha')}}" class="custom-logo-link" rel="home"><img width="150" height="45" src="/assets/images/logos.png" class="custom-logo" alt="Kontrolmatik" /></a>             </div><!-- #header-logo-image -->
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
                            <a href="/tr/blog"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.tr')}} </a>
                        </li>
                      <li>
                          <a href="/blog"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.eng')}} </a>
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
      </nav>
    </div>


  </header>
      <div id="main" class="clearfix">
    <div class="inner-wrap clearfix">
   <div class="front-page-top-section clearfix">
      <div class="widget_slider_area">
               </div>

      <div class="widget_beside_slider">
               </div>
   </div>
   <div class="main-content-section clearfix">
      <div id="primary">
         <div id="content" class="clearfix">


            <div class="article-container">



@foreach($blog_categories as $blog_categories)
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




 <article id="post-1081" class="post-1081 post type-post status-publish format-standard has-post-thumbnail hentry category-asset-management category-industry-4-0 category-internet-of-things category-kontrolmatik category-scada category-varlik-yonetimi">
         <div class="featured-image">
         <a href="../blog-detail/{{$blog_categories->slug}}" title="{{$blog_categories->title}}"><img width="800" height="445" src="../../main-laravel/laravel/storage/app/public/{{$blog_categories->image}}" class="attachment-colormag-featured-image size-colormag-featured-image wp-post-image" alt="" /></a>
         </div>
   <div class="article-content clearfix">

   @foreach(json_decode($blog_categories->meta_keywords, true) as $images)
   <div class="above-entry-meta" style="float:left"><span class="cat-links"><a href="javascript:void(0)"  rel="category tag">{{$images}}</a>&nbsp;</span></div>
   @endforeach
   <br>

      <header class="entry-header">
         <h2 class="entry-title">
            <a href="../{{Lang::get('home.blog-detail-link')}}/{{$blog_categories->slug}}" title="{{$blog_categories->title}}">{{$blog_categories->title}}</a>

         </h2>
      </header>

      <div class="below-entry-meta">
      <!--<span class="posted-on"><a href="tcdd-gunes-enerji-santrali-pisystem-ile-izleniyor/index.html" title="11:50 am" rel="bookmark"><i class="fa fa-calendar-o"></i> <time class="entry-date published" datetime="2019-07-05T11:50:38+00:00">5 July 2019</time><time class="updated" datetime="2019-07-05T11:50:40+00:00">5 July 2019</time></a></span>
      <span class="byline"><span class="author vcard"><i class="fa fa-user"></i><a class="url fn n" href="author/duygukandemir/index.html" title="Duygu Kandemir">Duygu Kandemir</a></span></span>-->
      <!--<span class="comments"><a href="tcdd-gunes-enerji-santrali-pisystem-ile-izleniyor/index.html#respond"><i class="fa fa-comment"></i> 0 Comments</a></span>--> </div>
      <div class="entry-content clearfix">
          <p>{{$blog_categories->title}}</p>
         <p>{{$blog_categories->excerpt}}</p>
         <a class="more-link" title="{{$blog_categories->title}}" href="../{{Lang::get('home.blog-detail-link')}}/{{$blog_categories->slug}}">
         <span>{{Lang::get('home.read-more')}}</span>
         </a>
      </div>
   </div>
   </article>



@endforeach

<link rel="alternate" hreflang="{{Lang::getLocale()}}" href="/{{$link2}}{{Lang::get('home.blog-categories')}}/{{$blog_categories->category_adi}}"/>

<link rel="canonical" href="/{{$link2}}{{Lang::get('home.blog-categories')}}/{{$blog_categories->category_adi}}" />
                           </div>
                  </div>
      </div>

<div id="secondary">

    <aside id="search-2" class="widget widget_search clearfix"><!-- .searchform --></aside><aside id="categories-2" class="widget widget_categories clearfix"><h3 class="widget-title"><span>{{Lang::get('home.categories')}}</span></h3>   <ul>
         <?php $blog = DB::table('categories')->where('order','1')->where('locale',Lang::getLocale())->orderBy('id')->get();

            foreach($blog as $blog){ ?>

            <li class="cat-item cat-item-10"><a href="{{$blog->slug}}">{{$blog->name}}</a>
            </li>

         <?php }  ?>


    </ul>
      </aside>

        <aside id="recent-posts-2" class="widget widget_recent_entries clearfix">
               <h3 class="widget-title"><span>{{Lang::get('home.recent')}}</span></h3>
            <ul>

              <?php $blog_recent = DB::table('blog_posts')->where('locale',Lang::getLocale())->where('featured','1')->orderBy('id')->get();

            foreach($blog_recent as $blog_recent){ ?>

             <li>
                  <a href="../{{Lang::get('home.blog-detail-link')}}/{{$blog_recent->slug}}">{{$blog_recent->title}}</a>
               </li>

         <?php }  ?>

               </ul>
         </aside>


  </div>
     </div>


    </div><!-- .inner-wrap -->
  </div><!-- #main -->
       @include('frontend/head-footer')
