
@include('frontend/header5')

@foreach($services as $services)



 <?php $serviceslang = DB::table('services')->orderBy('id')->where('author_id',$services->author_id)->get();



           foreach ($serviceslang as $serviceslang) { ?>
           <?php


                  $link2 = $serviceslang->locale;

                  if($serviceslang->locale == 'tr')
                 {
                    $link2 = "";



                 }

                 else{
                    $link2 .='/';

                 }



           ?>
           <?php

                  $link3 = Lang::getLocale();

                  if($link3 == 'tr')
                 {
                    $link3 = "";

                 }
                 else{
                     $link3 .='/';
                 }

                 $link4[] = $serviceslang->slug;
           ?>



       <?php  }

       ?>
      <link rel="alternate" hreflang="tr" href="/cozumler/{{Lang::get($link4[3],[],'tr')}}" />
       <link rel="alternate" hreflang="en" href="/en/services/{{Lang::get($link4[0],[],'en')}}" />
       <link rel="alternate" hreflang="fr" href="/fr/services/{{Lang::get($link4[1],[],'fr')}}" />
       <link rel="alternate" hreflang="ar" href="/ar/خدمات/{{$link4[2]}}" />


<link rel="canonical" href="/{{$link3}}{{Lang::get('home.services')}}/{{$services->slug}}">


<ul class="nav navbar-nav navbar-right">
                <li class="dropdown languagebtn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{Lang::get('home.lang')}}  <i class="fas fa-globe"></i> </a>
                    <ul class="dropdown-menu language-drop">
                    <li>
                            <a href="/tr/cozumler/{{Lang::get($link4[3],[],'tr')}}"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.tr')}}</a>
                        </li>
                        <li>
                            <a href="/en/services/{{Lang::get($link4[0],[],'en')}}"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.eng')}} </a>
                        </li>
                        <li>
                            <a href="/fr/services/{{Lang::get($link4[1],[],'fr')}}"><span class="flag-icon flag-icon-fr"></span>  {{Lang::get('home.fr')}} </a>
                        </li>
                        <li>
                            <a href="/ar/خدمات/{{$link4[2]}}"><span class="flag-icon flag-icon-ru"></span> {{Lang::get('home.ar')}}</a>
                        </li>
                    </ul>
                </li>
            </ul>




        </div>
    </header>

<div class="sp-cover" style="background-image: url(../../assets/media/1006/cover-photo.png)">
        <div class="container">
            <div class="content col-md-5">
                <div class="title">{{$services->name}}</div>
                <div class="text"></div>

            </div>
            <div class="sp-vertical-nav">

               <ul>

                <?php $servicered = DB::table('services')->orderBy('id')->where('locale', Lang::getLocale())->get();

                     foreach ($servicered as $servicered) { ?>


                         <?php
                            if($servicered->locale == 'tr'){ ?>
                              <li><a href="https://www.kontrolmatik.com/{{Lang::get('home.recaptcha')}}/cozumler/{{$servicered->slug}}"><i class="fas fa-chevron-right"></i> {{$servicered->name}}</a>
                              </li>
                            <?php }
                                else if($servicered->locale == 'ar'){ ?>

                              <li><a href="https://www.kontrolmatik.com/ar/خدمات/{{$servicered->slug}}"><i class="fas fa-chevron-right"></i> {{$servicered->name}}</a>
                              </li>

                        <?php }

                        else{ ?>
                            <li><a href="https://www.kontrolmatik.com/{{Lang::get('home.recaptcha')}}/services/{{$servicered->slug}}"><i class="fas fa-chevron-right"></i> {{$servicered->name}}</a>
                              </li> <?php }  ?>



                <?php  }
                        ?>



                </ul>

            </div>
        </div>
    </div>

    <div class="sp-content">
        <div class="container">
          <div class="col-md-6">{!! Markdown::convertToHtml($services->description) !!}</div> <div class="col-md-6"><img style="width: auto; height: auto; float: right;" src="../main-laravel/laravel/storage/app/public/{{$services->image}}" alt="" data-udi="umb://media/6378f2d9d33a4d63bdbbdfebad2aa7b2" /><iframe width="512" height="288" src="{{$services->youtube_link}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></div>
        </div>
    </div>



<div class="parallax">
        <div class="container">
            <div class="col-md-12">
                <h3>{{Lang::get('home.title')}}</h3>
                {{Lang::get('home.desc')}}
            </div>
        </div>
    </div>


    <!-- HOME TAB -->
    <div class="hometab-title">
        <div class="container">
            <h2 class="animated fadeInUp wow">{{Lang::get('home.other')}}</h2>
            <div class="desc"></div>
        </div>
    </div>
    <!-- HOME TAB END -->
    <div class="home-box">
        <div class="container">
            <div class="col-md-12">

              <?php  $orderservice = DB::table('services')->where('locale', Lang::getLocale())->inRandomOrder()->limit(3)->get();

                  foreach ($orderservice as $orderservice) { ?>

                      <div class="col-md-4">
                        <div class="item animated wow fadeInUp">
                        <div class="graybox">
                            <h3>{{$orderservice->name}}</h3>
                            <p class="short">{{substr($orderservice->description,0,200)}}</p>
                            <a href="../{{Lang::get('home.services-hizmet')}}/{{$orderservice->slug}}" class="more">{{Lang::get('home.read-more')}}
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        </div>
                      </div>

             <?php }

              ?>

            </div>
        </div>
    </div>

 @endforeach()



@include('frontend/footer4')
