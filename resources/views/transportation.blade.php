
@include('frontend/header5')

<link rel="alternate" hreflang="tr" href="/ulasim" />
<link rel="alternate" hreflang="en" href="/en/transportation" />
<link rel="alternate" hreflang="fr" href="/fr/transport" />
<link rel="alternate" hreflang="ar" href="/ar/وسائل-لنقل" />
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

<link rel="canonical" href="/{{$link2}}{{Lang::get('home.trans-link')}}">

<ul class="nav navbar-nav navbar-right">
                <li class="dropdown languagebtn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{Lang::get('home.lang')}}  <i class="fas fa-globe"></i> </a>
                    <ul class="dropdown-menu language-drop">
                    <li>
                            <a href="/ulasim"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.tr')}} </a>
                        </li>
                        <li>
                            <a href="/en/transportation"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.eng')}} </a>
                        </li>
                        <li>
                            <a href="/fr/transport"><span class="flag-icon flag-icon-fr"></span>  {{Lang::get('home.fr')}} </a>
                        </li>
                        <li>
                            <a href="/ar/وسائل-لنقل"><span class="flag-icon flag-icon-ru"></span> {{Lang::get('home.ar')}}</a>
                        </li>
                    </ul>
                </li>
            </ul>




        </div>
    </header>

<div class="sp-description">
            <div class="container">
            {{Lang::get('home.transportation')}}
                <br>


            </div>
        </div>
    <div class="container slist">


    @foreach ($transportation as $transportation)

        <div class="well col-md-4" style="background-image: url({{ Voyager::image( $transportation->image ) }}); background-size:cover;">
                <div class="media">
                    <a class="pull-left" href="#">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="{{Lang::get('home.ref_detail')}}/<?php echo $transportation['slug'];?>">
                            {{$transportation->title}}
                            </a>
                        </h4>
                        <p>{{$transportation->background}}</p>
                        <a href="{{Lang::get('home.ref_detail')}}/<?php echo $transportation['slug'];?>" class="btn btn-red">
                         {{Lang::get('home.read-more')}}
                        </a>
                    </div>
                </div>
        </div>

     @endforeach()
    </div>
    <!-- homefooter form -->
    @include('contact-form');
    <!-- homefooter form end -->
    @include('frontend/footer2')
