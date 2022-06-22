
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


         
        </div>
    </header>



<link rel="alternate" hreflang="en" href="/en" />
<link rel="alternate" hreflang="fr" href="/fr" />
<link rel="alternate" hreflang="ar" href="/ar" />
<link rel="alternate" hreflang="tr" href="" />

<link rel="canonical" href="" />
<section class="content-section video-section" style="margin-top:-60px !important;">
<video playsinline autoplay loop muted id="myVideo">
    <source type="video/mp4" src="main-laravel/laravel/storage/app/public/videolar\July2019\rZeyIbjo0CxcrSXcYMFt.mp4">
</video>
    <div class="sliderContent">
        <h2>CONTROL YOUR SYSTEMS, SAVE ENERGY,<br>
            <span>PROTECT THE NATURE</span>
        </h2>
        <div class="text">Transform your facilities for a sustainable, reliable and innovative future.</div>
    </div>
</section>

<!--Video Section Ends Here-->
    <!-- SLIDER END -->
    <!-- HOME PARALLAX -->
    <div class="parallax-home">
        <div class="container">
            <div class="col-md-6 animated wow fadeInLeft">
                <video width="100%" height="100%"  controls>
                  <source src="main-laravel/laravel/storage/app/public/videolar\July2019\V5afpjD5B0mpSlqbt623.mp4" type="video/mp4">
                </video>
            </div>
       <div class="col-md-6 homeAboutRight animated wow fadeInRight">
                <h2 class="title">COMPANY PROFILE</h2>
                <p class="text"><p>Kontrolmatik provides a broad spectrum of services to industries including; Consulting, Feasibility Studies, Project Management, Multidisciplinary Engineering Design, Construction Management, Procurement Services, Advanced Process Control, Computerized Plant Information Systems, Software Projects and support, Plant Start-up and Commissioning, IoT and Data Analytics product and services.</p>

                </p>
                <div class="col-md-12 homepdf">
    <div class="col-md-4 col-xs-2 items"><a href="main-laravel/laravel/storage/app/public/brochures/October2019/4kIaizYkc8Ksng0ovPUy.pdf" target="blank" class="pull-left" data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-file-alt"></i> <div class="broname">EPCM Brochure(ENG)</div></a></div>
    <div class="col-md-4 col-xs-2 items"><a href="main-laravel/laravel/storage/app/public/brochures/October2019/hPDhnS6gc9pvnxPKYgWo.pdf" target="blank" class="pull-left" data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-file-alt"></i> <div class="broname">EPCM Brochure(TR)</div></a></div>
    <div class="col-md-4 col-xs-2 items"><a href="main-laravel/laravel/storage/app/public/brochures/October2019/4kIaizYkc8Ksng0ovPUyeaae.pdf" target="blank" class="pull-left" data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-file-alt"></i> <div class="broname">Electrical and Automation(ENG)</div></a></div>


                </div>
                <a href="en/brochures" class="btn btn-lg btn-red pull-right">All Brochures</a>
                <a href="en/about-us" class="btn btn-lg btn-red pull-right">Learn More</a>
       </div>
        </div>
    </div>

    <!-- HOME PARALLAX END -->
    <!-- HOME TAB -->
<div class="hometab-title" style="background:#ee232f; color:#fff;">
    <div class="container">
        <h2 class="animated fadeInUp wow">SECTORS</h2>

    </div>
</div>
 <div class="col-md-12 sectorContent">
    <div class="col-md-12 sectorblok" style="padding:0 !important;">
        <div class="col-md-6 col-xs-12" style="padding:0 !important"><img class="img-responsive" src="assets/images/sectors1.png"/></div>
        <div class="col-md-6 col-container" style="padding:0;">
        <!-- item -->
            <a href="en/sector/energy">
            <div class="col-md-6 col-xs-12 item col-item ">
                    <div class="title">ENERGY</div>
                    <div class="desc">Kontrolmatik has the experience and expertise you require to meet not only industry demands, but also those that are unique to your operations.</div>
                    <div class="readmore">Read More <i class="fas fa-arrow-right"></i></div>
            </div>
            </a>
            <!-- item end -->
        <!-- item -->
            <a href="en/sector/industrial-facilities">
            <div class="col-md-6 col-xs-12 item col-item col-4">
                    <div class="title">INDUSTRIAL FACILITIES </div>
                    <div class="desc">As Kontrolmatik, we ensure total solutions to Chemistry, Refinery, Oil&amp;Gas, Energy, Petrochemistry, Food&amp;Beverage, Environment</div>
                    <div class="readmore">Read More <i class="fas fa-arrow-right"></i></div>
            </div>
            </a>
            <!-- item end -->
        </div>
    </div>

    <div class="col-md-12 sectorblok" style="padding:0 !important;">
        <div class="col-md-6" style="padding:0;">

        <!-- item -->
            <a href="en/sector/transportation">
            <div class="col-md-6 col-xs-12 item col-item ">
                    <div class="title">TRANSPORTATION </div>
                    <div class="desc">Technology is playing a significant role in different aspects of the transportation industry, modern technologies are embraced...</div>
                    <div class="readmore">Read More <i class="fas fa-arrow-right"></i></div>
            </div>
            </a>
            <!-- item end -->
        <!-- item -->
            <a href="en/sector/mining">
            <div class="col-md-6 col-xs-12 item col-item col-4">
                    <div class="title">MINING </div>
                    <div class="desc">Kontrolmatik delivers complete plant electrification, integrated process control and optimization solutions, motors and drives...</div>
                    <div class="readmore">Read More <i class="fas fa-arrow-right"></i></div>
            </div>
            </a>
            <!-- item end -->
            </div>
        <div class="col-md-6" style="padding:0 !important;"><img class="img-responsive" src="assets/images/sectors2.png"/></div></div>
        </div>

    <!-- HOME TAB -->
<div class="hometab-title">
    <div class="container">
        <h2 class="animated fadeInUp wow">SERVICES</h2>

    </div>
</div>
<!-- HOME TAB END -->
<div class="home-box">
    <div class="container">
        <div class="col-md-4">
            <div class="item animated wow fadeInUp">
                <div class="image">
                    <img class="img-responsive" src="assets/media/1212/mine.jpg" />
                </div>
                <div class="redbox">
                    <h3>AUTOMATION</h3>
                    <p class="short">With its ability to work on standard computer hardware, in addition to control systems such as DCS, PLC as well as capability to convert all control parameters into visual control tools, SCADA software makes it possible to expand the system to meet changes in future requirements.</p>

                    <a href="en/services/automation" class="more">Read More
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>


        <div class="col-md-8">
       <div class="col-md-6">
                <div class="item animated wow fadeInUp">
                    <div class="graybox">
                        <h3>IoT and DATA ANALYTICS</h3>
                        <p class="short">IoT solutions can connect you to customers, business operations, and the environment to degree never before realized. Here are some things IoT could do for your business.</p>
                        <a href="en/services/iot-and-data-analytics" class="more">Read More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
       <div class="col-md-6">
                <div class="item animated wow fadeInUp">
                    <div class="graybox">
                        <h3>BALANCE OF PLANT</h3>
                        <p class="short">Independent from the type of your power plant, our experience and engineering know-how allows us to provide ”Balance of Plant“ integration specific to your installations and turn-key system integration.</p>
                        <a href="en/services/balance-of-plant" class="more">Read More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

       <div class="col-md-12">
                <div class="item animated wow fadeInUp">
                    <div class="image2">
                        <img class="img-responsive" src="assets/media/1213/hlservices.jpg" />
                    </div>
                    <div class="redbox redboxL col-md-6">
                        <h3>LV/MV/HV SERVICES</h3>
                        <p class="short">Power supply systems. One-line diagrams. M.C.C design. Lighting systems. Grounding and lighting protection. Power generation. Public address systems.</p>
                        <a href="en/services/lv-mv-hv-services" class="more">Read More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

     <!-- HOME TAB -->
     <div class="hometab-title">
        <div class="container">
            <h2>REFERENCES</h2>

        </div>
    </div>
    <!-- HOME TAB END -->
    <!-- referance-->
    <div class="ref-content">
        <div class="responsive home-referance">
        <a href="en/power-plant-and-transmission">
        <div>
              <div class="ref-item">
                  <img src="assets/media/1017/875529_72260220.jpg" class="img-responsive">
                  <div class="mask"></div>
                  <div class="centered">POWER PLANT and TRANSMISSION </div>
              </div>
          </div>
        </a>

          <a href="en/industrial-zones">
            <div>
              <div class="ref-item">
                  <img src="assets/media/1237/zone.jpg" class="img-responsive">
                  <div class="mask"></div>
                  <div class="centered">INDUSTRIAL ZONES</div>
              </div>
          </div>
          </a>
          <a href="en/industrial-references">
            <div>
              <div class="ref-item">
                  <img src="assets/media/1024/mine.jpg" class="img-responsive">
                  <div class="mask"></div>
                  <div class="centered">industrial references</div>
              </div>
          </div>
          </a>
          <a href="en/services/transportation">
          <div>
              <div class="ref-item">
                  <img src="assets/media/1242/transportation.jpg" class="img-responsive">
                  <div class="mask"></div>
                  <div class="centered">TRANSPORTATION </div>
              </div>
          </div>
          </a>
        </div>
    </div>
    <!-- referance end -->




    <!-- HOME TAB -->
    <div class="hometab-title globalmap">
        <div class="container">
            <h2>GLOBAL</h2>

        </div>
    </div>
    <!-- HOME TAB END -->
<div class="world-map globalmap">
        <div class="container">
            <div class="slogan animated wow fadeInUp">
            <div class="text1">More than 200 employees</div>
            <div class="text2">Executed plenty of projects in more than 20 different countries</div>
            </div>
            <div class="map-bg">
            <img class="img-responsive" width="100%" src="assets/images/world-map.png"/>
            </div>
            <div class="pointer-group">


            <div class="pointer p1 fadeIn animated wow" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <a href="en/contact" class="pull-left"  data-placement="top">
                    <i class="fas fa-map-marker-alt"></i><div class="name"><strong>Germany</strong></div>
                </a>
            </div>


            <div class="pointer p2 fadeIn animated wow" data-wow-duration="1.0s" data-wow-delay="1.0s">
                <a href="en/contact" class="pull-left" data-placement="top">
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>ISTANBUL</strong></div>
                </a>
            </div>


            <div class="pointer p3 fadeIn animated wow" data-wow-duration="1.5s" data-wow-delay="1.5s">
                <a href="en/contact" class="pull-left" data-placement="top">
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>Kazakhstan</strong><br> </div>
                </a>
            </div>


            <div class="pointer p4 fadeIn animated wow" data-wow-duration="2.0s" data-wow-delay="2.0s">
                <a href="en/contact" class="pull-left" data-placement="top">
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>Sudan  </strong></div>
                </a>
            </div>

            <div class="pointer p5 fadeIn animated wow" data-wow-duration="2.5s" data-wow-delay="2.5s">
                <a href="en/contact" class="pull-left" data-placement="top">
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>Dubai  </strong></div>
                </a>
            </div>


            <div class="pointer p6 fadeIn animated wow" data-wow-duration="3.0s" data-wow-delay="3.0s">
                <a href="en/contact" class="pull-left"  data-placement="top" >
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>Ethiopia   </strong></div>
                </a>
            </div>

            <div class="pointer p7 fadeIn animated wow" data-wow-duration="3.5s" data-wow-delay="3.5s">
                <a href="en/contact" class="pull-left"  data-placement="top" >
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>Kenya  </strong></div>
                </a>
            </div>
            <div class="pointer p8 fadeIn animated wow" data-wow-duration="4.0s" data-wow-delay="4.0s">
                <a href="en/contact" class="pull-left"  data-placement="top" >
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>Iraq  </strong></div>
                </a>
            </div>
            <div class="pointer p9 fadeIn animated wow" data-wow-duration="4.5s" data-wow-delay="4.5s">
                <a href="en/contact" class="pull-left"  data-placement="top" >
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>Afghanistan  </strong></div>
                </a>
            </div>
     </div>
 </div>
</div>

    <div class="homefooter-form">
        <div class="container">
            <div class="col-md-4">
                <h3>Contact</h3>
                    <div class="text">
                    Want to know more? Contact us about product information and pricing, customer feedback, stockholder services, or just to voice a concern.
                    </div>
                <a href="en/contact">
                    <div class="btn btn-black">
                    Get Started
                    </div>
                </a>
            </div>
            <div class="col-md-8 col-xs-12 mnopadding">
                <h3>Get in Touch</h3>
                <form id="appointment-form" name="appointment-form" action="/send" method="post">
                     <input type="hidden" name="_token" value="IsPKYbaKZhd6nciJBoPFSmTOIJOfTZ1hlFChDZsQ">
                <div class="col-md-12 clearfix mnopadding">
                        <div class="col-md-6 col-xs-12 mnopadding">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="form_name" id="form_name" placeholder="Your Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="form_email" id="form_email" placeholder="E-Mail Address" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="form_phone" id="form_phone" placeholder="Phone No" required="">
                                </div>

                                <!-- <div class="form-group">
                                    <input type="text" class="s1" id="s1">
                                    <input type="text" class="s2" id="s2">
                                </div>
                                <div class="form-group">
                                    <span class="form-control" name="form_questions" id="form_questions"  required=""></span>
                                </div>
                            -->

                                <script>
                                function myFunction(s1,s2) {
                                  document.getElementById("form_questions").innerHTML = Math.random();
                                }
                                </script>

                        </div>

                        <div class="col-md-6 col-xs-12 mnopadding">
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="form_message" id="form_message" placeholder="Your Message" required=""></textarea>
                            </div>

                            <div class = "g-recaptcha" name="g-recaptcha" required="" data-sitekey = "6LfTsb4UAAAAABI4C0ba951yGnqgzMRcUB2VUdGj"> </div>


                        </div>
                 </div>

                <div class="col-md-12">
                    <button class="btn btn-red" name="gonder" type="submit">Send Message</button>
                </div>
            </div>
        </form>

        </div>
    </div>;

     <footer>
        <div class="container">
            <div class="col-md-3 footerlogo">
                <img class="img-responsive"  src="assets/images/logos.png" />
            </div>

            <div class="col-md-4 col-xs-12 social">
                <ul class="social-network social-circle">
                    
                     <li>
                        <a href="https://www.facebook.com/Kontrolmatik/" target="_blank" class="icoInstagram" title="Instagram">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                   
                    <li>
                        <a href="https://www.youtube.com/channel/UClVwvO2njwrWldU0Zho2XWA" target="_blank" class="icoTwitter" title="Youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    
                    <li>
                        <a href="https://www.instagram.com/kontrolmatik" target="_blank" class="icoInstagram" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    
                    <li>
                        <a href="https://twitter.com/Kontrolmatik" target="_blank" class="icoInstagram" title="Instagram">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    
                     <li>
                        <a href="https://www.linkedin.com/company/kontrolmatik/" target="_blank" class="icoLinkedin" title="Linkedin">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                    

                </ul>
            </div>
        </div>

    </footer>
    <div class="col-md-12 footerinfo">© 2019 - All rights reserved</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->


    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/jquery.basictable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.1/jquery.mb.YTPlayer.js"></script>
    <script src = "https://www.google.com/recaptcha/api.js?hl=en"> </script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script src="/js/app.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
          $('#table').basictable();

        });
    </script>

    <script>
        $(document).ready(function () {
            $(".player").mb_YTPlayer();
        });
    </script>

    <script>
        $(document).ready(function () {
            $("#menu-toggle").click(function () {
                $(".navbar-nav").toggle();
            });
        });
    </script>

    <script>
        $('#menu-toggle').click(function () {
            $(this).toggleClass('open');
        })
    </script>

    <script src="assets/js/slick.min.js"></script>
    <script>
        $('.autoplay').slick({
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
        });
    </script>
    <script>
        $('.responsive').slick({
            dots: false,
            infinite: true,
            speed: 300,
            arrows:true,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        dots: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        dots: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
        <script>
        $('.responsive2').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>

    <script>
        $('.nav-tabs-dropdown').each(function (i, elm) {

            $(elm).text($(elm).next('ul').find('li.active a').text());

        });

        $('.nav-tabs-dropdown').on('click', function (e) {

            e.preventDefault();

            $(e.target).toggleClass('open').next('ul').slideToggle();

        });

        $('#nav-tabs-wrapper a[data-toggle="tab"]').on('click', function (e) {

            e.preventDefault();

            $(e.target).closest('ul').hide().prev('a').removeClass('open').text($(this).text());

        });
        new WOW().init();

    </script>
    <script>
    $(document).ready(function(){

$(".filter-button").click(function(){
    var value = $(this).attr('data-filter');

    if(value == "all")
    {
        //$('.filter').removeClass('hidden');
        $('.filter').show();
    }
    else
    {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
        $(".filter").not('.'+value).hide();
        $('.filter').filter('.'+value).show();

    }
});

if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
$(document).ready(function(){
    $('[data-toggle="tooltip2"]').tooltip();
});

    $(".video-play").on('click', function(e) {
        e.preventDefault();
        var vidWrap = $(this).parent(),
            iframe = vidWrap.find('.video iframe'),
            iframeSrc = iframe.attr('src'),
            iframePlay = iframeSrc += "?autoplay=1";
        vidWrap.children('.video-thumbnail').fadeOut();
        vidWrap.children('.video-play').fadeOut();
        vidWrap.find('.video iframe').attr('src', iframePlay);


    });

    </script>
<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}

</script>
<script type="text/javascript">
$(document).on('webkitExitFullScreen', function()      {
  alert("Full Screen Closed");
});
</script>
</body>



<meta http-equiv="content-type" content="text/html;charset=utf-8">
</html>
