@include('frontend/header5')

<link rel="alternate" hreflang="tr" href="/referanslar" />
 <link rel="alternate" hreflang="en" href="/en/references" />
<link rel="alternate" hreflang="fr" href="/fr/references" />
<link rel="alternate" hreflang="ar" href="/ar/المراجع" />


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
 <link rel="canonical" href="/{{$link2}}{{Lang::get('home.references-link')}}" />




 <ul class="nav navbar-nav navbar-right">

<li class="dropdown languagebtn">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{Lang::get('home.lang')}}  <i class="fas fa-globe"></i> </a>
    <ul class="dropdown-menu language-drop">
    <li>
              <a href="/tr/referanslar"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.tr')}} </a>
          </li>
        <li>
            <a href="/references"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.eng')}} </a>
        </li>
        <li>
          <a href="/fr/references"><span class="flag-icon flag-icon-fr"></span>  {{Lang::get('home.fr')}} </a>
        </li>
       <li>
            <a href="/ar/المراجع"><span class="flag-icon flag-icon-ru"></span> {{Lang::get('home.ar')}}</a>
        </li>

    </ul>
</li>
</ul>

</div>
</header>
 <div class="sp-description">
            <div class="container">

            </div>
        </div>

<div class="sp-content">
        <div class="container">


    @foreach ($ref as $reference)
	<a href="{{$reference->references_link}}">
	<div class="col-md-6"> <div class="ref-item">
                  <img src="../main-laravel/laravel/storage/app/public/{{$reference->references_image}}" class="img-responsive">
                  <div class="mask"></div>
                  <div class="centered">{{$reference->references_name}} </div>
    </div>
    </div>
    </a>
    @endforeach
      </div>
    </div>

    <!-- homefooter form end -->
    @include('frontend/footer2')
