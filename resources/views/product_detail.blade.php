<!DOCTYPE html>
<html lang="{{Lang::getLocale()}}">


<meta http-equiv="content-type" content="text/html;charset=utf-8">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154698013-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-154698013-1');
</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Kontrolmatik</title>


    <!-- Bootstrap -->
    <link href="../../<?php if(Lang::getLocale() == 'ar'){echo 'assets/css/bootstrap_ar.css';}else{echo 'assets/css/bootstrap.css';}  ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/images/logoIcon.png" />
    <link rel="icon" type="image/png" href="/assets/images/logoIcon.png" />
    <link rel="icon" type="image/gif" href="/assets/images/logoIcon.png" />
    <!-- Opera Speed Dial Favicon -->
      <link rel="icon" type="image/png" href="/assets/images/logoIcon.png" />

    <!-- Standard Favicon -->
      <link rel="icon" type="image/x-icon" href="/assets/images/logoIcon.png" />

    <!-- For iPhone 4 Retina display: -->
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/logoIcon.png">

    <!-- For iPad: -->
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/logoIcon.png">

    <!-- For iPhone: -->
    <link rel="apple-touch-icon-precomposed" href="/assets/images/logoIcon.png">
    <link href="/assets/css/animate.css" rel="stylesheet">
    <link href="/<?php if(Lang::getLocale() == 'ar'){echo 'assets/css/main6654_ar.css?v1';}else{echo 'assets/css/main6654.css?v1';}  ?>" rel="stylesheet">
    <link href="/assets/css/slick-theme.css" rel="stylesheet">
    <link href="/<?php if(Lang::getLocale() == 'ar'){echo 'assets/css/slick_ar.css';}else{echo 'assets/css/slick.css';}  ?>" rel="stylesheet">
    <link href="/assets/css/plugin6654.css?v1" rel="stylesheet">
    <link href="/assets/css/lightbox.css" rel="stylesheet">
    <link href="/assets/css/flag-icon.min.css" rel="stylesheet">
    <link href="/assets/css/basictable.css" rel="stylesheet">
    <link href="/css/simple-lightbox.css" rel="stylesheet">


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68488870-11', 'auto');
  ga('send', 'pageview');

</script>



</head>




<body>
    <div id="menu-toggle">
        <div id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div id="cross">
            <span></span>
            <span></span>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="navbar-brand">
                <div class="logo">
                <?php

                  $link = Lang::getLocale();
                  if($link == 'tr')
                 {
                    $link = " ";
                 }

           ?>


                    <a href="/{{Lang::get('home.recaptcha')}}{{$link}}">
                        <img src="/assets/images/logo-sv.png" />
                    </a>
                </div>
            </div>

             @if(Lang::getLocale() == 'en')
             {{menu('main','bootstrap')}}

             @elseif(Lang::getLocale() == 'tr')
             {{menu('main_tr','bootstrap')}}


             @elseif(Lang::getLocale() == 'fr')
             {{menu('main_fr','bootstrap')}}


             @elseif(Lang::getLocale() == 'ar')
             {{menu('main_ar','bootstrap')}}

             @endif





@foreach($detail as $detail)

 <?php $productlang = DB::table('posts')->orderBy('id')->where('author_id',$detail->author_id)->get();

           foreach ($productlang as $productlang) { ?>
           <?php

       $link3 = Lang::getLocale();

       if($link3 == 'tr')
      {
         $link3 = "";

      }
      else{
          $link3 .='/';
      }

      $link4[] = $productlang->slug;
?>


       <?php }

       ?>

<link rel="alternate" hreflang="{{Lang::getLocale()}}" href="/{{$link3}}{{Lang::get('home.ref_detail')}}/{{$detail->slug}}">

<link rel="canonical" href="/{{$link3}}{{Lang::get('home.ref_detail')}}/{{$detail->slug}}">



<ul class="nav navbar-nav navbar-right">

<li class="dropdown languagebtn">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{Lang::get('home.lang')}}  <i class="fas fa-globe"></i> </a>
    <ul class="dropdown-menu language-drop">
    <li>
              <a href="/referanslar"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.tr')}} </a>
          </li>
        <li>
            <a href="/en/references"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.eng')}} </a>
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

    <div class="sp-cover" style="background-image: url({{ Voyager::image( $detail->slider_image) }})">
        <div class="container">
            <div class="content col-md-5">
                <div class="title2">{{$detail->title}}

                </div>
            </div>

<div style="float:right;" class="row" data-equalizer>


<?php $detail3 = DB::table('posts')->orderBy('id')->where('id',$detail->id+1)->get();

      foreach ($detail3 as $detail3) { ?>
           <div class="small-2 columns">
                    <a href="../{{Lang::get('home.ref_detail')}}/{{$detail3->slug}}">

                        <div style="width: 100px;    background-color: #ec262c; color: white;" class="panel" data-equalizer-watch>
                            <h5 class="text-center">
                                {{Lang::get('home.previous')}}
                            </h5>
                            <p class="text-right">
                            </p>
                        </div>
                    </a>
            </div>
       <?php }
       ?>

<?php $detail2 = DB::table('posts')->orderBy('id')->where('id',$detail->id+2)->get();


      foreach ($detail2 as $detail2) { ?>

            <div class="small-2 columns">
                <a href="../{{Lang::get('home.ref_detail')}}/{{$detail2->slug}}">
                    <div style="width: 100px; background-color: white; color: black;" class="panel" data-equalizer-watch>
                        <h5 class="text-center">
                        {{Lang::get('home.next')}}
                        </h5>
                        <p class="text-left">
                        </p>
                    </div>
                </a>
            </div>


       <?php }
       ?>


    </div>

    </div>
    </div>


    <div class="sp-content">
        <div class="container">
            <div class="col-md-4">
                <div class="col-md-12 project-box">
                    <h3>{{Lang::get('home.project')}} </h3>
                    <div class="divtitle">{{$detail->title}}</div>
                </div>

                <div class="col-md-12 project-box">
                    <h3>{{Lang::get('home.locationsnew')}} </h3>
                    <div class="divtitle">{{$detail->location}}</div>
                </div>
                <div class="col-md-12 project-box">
                    <h3>{{Lang::get('home.backgrounds')}} </h3>
                    <div class="divtitle"> {{$detail->background}} </div>
                </div>
            </div>
            <?php if(Lang::getLocale() == 'ar'){ ?>

            <div class="col-md-8">
            {!! Markdown::convertToHtml($detail->body) !!}
            </div>
          <?php   }
          else{ ?>

            <div class="col-md-8">
            {!! Markdown::convertToHtml($detail->body) !!}
            </div>

        <?php    }

            ?>

       <div class="gallery col-md-12 ">
        @foreach(json_decode($detail->product_image, true) as $images)

            <div class="col-md-3 gallery1">
                <a href="{{ URL::to('main-laravel/laravel/storage/app/public//'.$images)}}" data-toggle="lightbox" ><img  title="Kontrolmatik" src="{{ URL::to('main-laravel/laravel/storage/app/public//'.$images)}}" /></a>
            </div>

        @endforeach
        </div>

        @endforeach


        </div>
    </div>
   <!-- homefooter form -->
   <div class="homefooter-form">
        <div class="container">
            <div class="col-md-4">
                <h3>{{Lang::get('home.contact')}}</h3>
                <div class="text">
                {{Lang::get('home.contact-desc')}}
                </div>
                <a href="contact-us/index.html"><div class="btn btn-black">
                {{Lang::get('home.get-started')}}
                </div></a>
            </div>
            <div class="col-md-8 col-xs-12 mnopadding">
                <h3>{{Lang::get('home.get-in-touch')}}</h3>
                <form id="appointment-form" name="appointment-form" action="{{ url('/send')}}" method="post">
                    {{ csrf_field() }}
                <div class="col-md-12 clearfix mnopadding">
                        <div class="col-md-6 col-xs-12 mnopadding">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="form_name" id="form_name" placeholder="{{Lang::get('home.your-name')}}" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="form_email" id="form_email" placeholder="{{Lang::get('home.email')}}" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="form_phone" id="form_phone" placeholder="{{Lang::get('home.phone')}}" required="">
                                </div>

                        </div>

                        <div class="col-md-6 col-xs-12 mnopadding">
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="form_message" id="form_message" placeholder="{{Lang::get('home.message')}}" required=""></textarea>
                            </div>

                        </div>
                     </div>

                <div class="col-md-12">
                    <button class="btn btn-red" type="submit">{{Lang::get('home.send')}}</button>

                </div>
            </div>
                </form>

        </div>
    </div>
    </div>


    <!-- homefooter form end -->
    @include('frontend/footer4')
