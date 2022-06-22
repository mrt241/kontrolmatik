<!DOCTYPE html>
<html lang="{{Lang::getLocale()}}">
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<head>
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
    <link href="<?php if(Lang::getLocale() == 'ar'){echo 'assets/css/bootstrap_ar.css';}else{echo 'assets/css/bootstrap.css';}  ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/logoIcon.png" />
    <link rel="icon" type="image/png" href="assets/images/logoIcon.png" />
    <link rel="icon" type="image/gif" href="assets/images/logoIcon.png" />
    <!-- Opera Speed Dial Favicon -->
      <link rel="icon" type="image/png" href="assets/images/logoIcon.png" />

    <!-- Standard Favicon -->
      <link rel="icon" type="image/x-icon" href="assets/images/logoIcon.png" />

    <!-- For iPhone 4 Retina display: -->
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/logoIcon.png">

    <!-- For iPad: -->
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/logoIcon.png">

    <!-- For iPhone: -->
    <link rel="apple-touch-icon-precomposed" href="assets/images/logoIcon.png">
    <link href="assets/css/animate.css" rel="preload">
    <link href="<?php if(Lang::getLocale() == 'ar'){echo 'assets/css/main6654_ar.css?v1';}else{echo 'assets/css/main6654.css?v1';}  ?>" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="preload">
    <link href="<?php if(Lang::getLocale() == 'ar'){echo 'assets/css/slick_ar.css';}else{echo 'assets/css/slick.css';}  ?>" rel="stylesheet">
    <link href="assets/css/plugin6654.css?v1" rel="stylesheet">
    <link href="assets/css/lightbox.css" rel="stylesheet">
    <link href="assets/css/flag-icon.min.css" rel="stylesheet">
    <link href="assets/css/basictable.css" rel="stylesheet">

    <link rel='stylesheet' href='../cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.0.8/css/jquery.mb.YTPlayer.min.css'>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-68488870-11', 'auto');
	  ga('send', 'pageview');

	</script>

  <script type="application/ld+json">
{
"@context": "http://schema.org",
"@type": "Organization",
"name": "Kontrolmatik",
"alternatename":"Kontrolmatik",
"legalName":"ŞİRKET ÜNVANI", // Şirketin yasal adı bu alana eklenmelidir.
"description":"ŞİRKET VE FAALİYETLERİ HAKKINDA AÇIKLAMA", // Kontrolmatik ve hizmetleri hakkında tanıtıcı bir açıklama bu alana eklenmelidir.
    "logo": {
    "@type": "ImageObject",
    "url": "/assets/images/logo-sv.png",
    "height": "76",
    "width": "250"
    },
"address": {
"@type": "PostalAddress",
"streetAddress": "Tekstilkent Koza Plaza, A Blok Kat:15 No:58 Esenler / Istanbul / TURKEY",
"addressLocality": "İstanbul",
"addressRegion": "Esenler",
"postalCode": "34235"
},
"email": "info@kontrolmatik.com",
"telePhone": "+90 (212) 659 24 41",
"areaServed":"TR",
"url": "/",
"founder":"Kurucu ismi", //zorunlu alan değildir.
"foundingDate":"2005", //zorunlu alan değildir.
"foundingLocation":"İstanbul" //zorunlu alan değildir.
}
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
                    <a href="/{{$link}}">
                        <img src="assets/images/logos.png" />
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


          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown languagebtn">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{Lang::get('home.lang')}}  <i class="fas fa-globe"></i> </a>
                  <ul class="dropdown-menu language-drop">
                  <li>
                            <a href="/"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.tr')}} </a>
                        </li>
                      <li>
                          <a href="/en"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.eng')}} </a>
                      </li>
                      <li>
                        <a href="/fr"><span class="flag-icon flag-icon-fr"></span>  {{Lang::get('home.fr')}} </a>
                      </li>
                     <li>
                          <a href="/ar"><span class="flag-icon flag-icon-ru"></span> {{Lang::get('home.ar')}}</a>
                      </li>
                  </ul>
              </li>
          </ul>
        </div>
    </header>
