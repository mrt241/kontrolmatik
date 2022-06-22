
@include('frontend/header5')

<link rel="alternate" hreflang="tr" href="/endustriyel-referanslar" />
<link rel="alternate" hreflang="en" href="/en/industrial-references" />
<link rel="alternate" hreflang="fr" href="/fr/references-industrielles" />
<link rel="alternate" hreflang="ar" href="/ar/المراجع-الصناعية" />
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

<link rel="canonical" href="/{{$link2}}{{Lang::get('home.industrial-references-link')}}">


<ul class="nav navbar-nav navbar-right">
                <li class="dropdown languagebtn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{Lang::get('home.lang')}}  <i class="fas fa-globe"></i> </a>
                    <ul class="dropdown-menu language-drop">
                    <li>
                            <a href="/tr/endustriyel-tesisler" ><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.tr')}} </a>
                        </li>
                        <li>
                            <a  href="/industrial-references"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.eng')}} </a>
                        </li>
                        <li>
                            <a href="/fr/references-industrielles"><span class="flag-icon flag-icon-fr"></span>  {{Lang::get('home.fr')}} </a>
                        </li>
                        <li>
                            <a href="/ar/المراجع-الصناعية"><span class="flag-icon flag-icon-ru"></span> {{Lang::get('home.ar')}}</a>
                        </li>
                    </ul>
                </li>
            </ul>




        </div>
    </header>
<div class="sp-description">
            <div class="container">
            {{Lang::get('home.industrial-references')}}
                <br>


            </div>
</div>
    <div class="container slist">


    @foreach ($industrial_references as $industrial_references)

        <div class="well col-md-4" style="background-image: url({{ Voyager::image( $industrial_references->image ) }}); background-size:cover;">
                <div class="media">
                    <a class="pull-left" href="#">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="{{Lang::get('home.ref_detail')}}/<?php echo $industrial_references['slug'];?>">
                            {{$industrial_references->title}}
                            </a>
                        </h4>
                        <p>{{$industrial_references->background}}</p>
                        <a href="{{Lang::get('home.ref_detail')}}/<?php echo $industrial_references['slug'];?>" class="btn btn-red">
                        {{Lang::get('home.read-more')}}
                        </a>

                    </div>
                </div>
        </div>

     @endforeach





    </div>
    <!-- homefooter form -->
    @include('contact-form');
    <!-- homefooter form end -->
    @include('frontend/footer2')
