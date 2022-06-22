@include('frontend/header3')

<link rel="alternate" hreflang="en" href="/en/locations" />
<link rel="alternate" hreflang="tr" href="/ofisler" />
<link rel="alternate" hreflang="fr" href="/fr/locations" />
<link rel="alternate" hreflang="ar" href="/ar/مواقع" />
<link rel="canonical" href="/kontrolmatik/{{Lang::get('home.locations-link')}}">
<div class="sp-cover" style="background-image: url(../assets/media/1006/cover-photo.png)">
        <div class="container">
            <div class="content col-md-5">
                <div class="title">{{Lang::get('home.locations')}}</div>
                <div class="text">{{Lang::get('home.create')}}</div>

            </div>
            <div class="sp-vertical-nav sp-vertical-nav2">


    <ul>
		<li><i class="fas fa-chevron-right"></i><a href=".{{Lang::get('home.overview-link')}}">{{Lang::get('home.overview')}}</a></li>
		<li><i class="fas fa-chevron-right"></i><a href=".{{Lang::get('home.safety-link')}}">{{Lang::get('home.safety')}}</a></li>
		<li><i class="fas fa-chevron-right"></i><a href=".{{Lang::get('home.our-advantage-link')}}">{{Lang::get('home.our-advantage')}}</a></li>
		<li><i class="fas fa-chevron-right"></i><a href=".{{Lang::get('home.locations-link')}}">{{Lang::get('home.locations')}}</a></li>
		<li><i class="fas fa-chevron-right"></i><a href=".{{Lang::get('home.partnership-link')}}">{{Lang::get('home.partnership')}}</a></li>
		<li><i class="fas fa-chevron-right"></i><a href=".{{Lang::get('home.brochures-link')}}">{{Lang::get('home.brochures')}}</a></li>
		<li><i class="fas fa-chevron-right"></i><a href=".{{Lang::get('home.videos-link')}}">{{Lang::get('home.videos')}}</a></li>
		<li><i class="fas fa-chevron-right"></i><a href=".{{Lang::get('home.join-us-link')}}">{{Lang::get('home.join-us')}}</a></li>
		<li><i class="fas fa-chevron-right"></i><a href=".{{Lang::get('home.quality-link')}}">{{Lang::get('home.quality')}}</a></li>
    </ul>

            </div>
        </div>
    </div>

<div class="sp-content">
        <div class="container">
        <!-- HOME TAB -->
    <div class="hometab-title globalmap">
        <div class="container">
            <h2>{{Lang::get('home.global')}}</h2>

        </div>
    </div>
     <!-- HOME TAB END -->
<div class="world-map globalmap">
        <div class="container">
            <div class="slogan animated wow fadeInUp">
            <div class="text1">{{Lang::get('home.more-than')}}</div>
            <div class="text2">{{Lang::get('home.more-than-desc')}}</div>
            </div>
            <div class="map-bg">
            <img class="img-responsive" width="100%" src="../assets/images/world-map.png"/>
            </div>
            <div class="pointer-group">


            <div class="pointer p1 fadeIn animated wow" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <a href="{{Lang::get('home.contact-link')}}" class="pull-left"  data-placement="top">
                    <i class="fas fa-map-marker-alt"></i><div class="name"><strong>{{Lang::get('home.germany')}}</strong></div>
                </a>
            </div>


            <div class="pointer p2 fadeIn animated wow" data-wow-duration="1.0s" data-wow-delay="1.0s">
                <a href="{{Lang::get('home.contact-link')}}" class="pull-left" data-placement="top">
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>{{Lang::get('home.istanbul')}}</strong></div>
                </a>
            </div>


            <div class="pointer p3 fadeIn animated wow" data-wow-duration="1.5s" data-wow-delay="1.5s">
                <a href="{{Lang::get('home.contact-link')}}" class="pull-left" data-placement="top">
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>{{Lang::get('home.kazakistan')}}</strong><br> </div>
                </a>
            </div>


            <div class="pointer p4 fadeIn animated wow" data-wow-duration="2.0s" data-wow-delay="2.0s">
                <a href="{{Lang::get('home.contact-link')}}" class="pull-left" data-placement="top">
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>{{Lang::get('home.sudan')}}  </strong></div>
                </a>
            </div>

            <div class="pointer p5 fadeIn animated wow" data-wow-duration="2.5s" data-wow-delay="2.5s">
                <a href="{{Lang::get('home.contact-link')}}" class="pull-left" data-placement="top">
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>{{Lang::get('home.dubai')}}  </strong></div>
                </a>
            </div>


            <div class="pointer p6 fadeIn animated wow" data-wow-duration="3.0s" data-wow-delay="3.0s">
                <a href="{{Lang::get('home.contact-link')}}" class="pull-left"  data-placement="top" >
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>{{Lang::get('home.etiyopya')}}  </strong></div>
                </a>
            </div>

            <div class="pointer p7 fadeIn animated wow" data-wow-duration="3.5s" data-wow-delay="3.5s">
                <a href="{{Lang::get('home.contact-link')}}" class="pull-left"  data-placement="top" >
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>{{Lang::get('home.kenya')}}  </strong></div>
                </a>
            </div>
            <div class="pointer p8 fadeIn animated wow" data-wow-duration="4.0s" data-wow-delay="4.0s">
                <a href="{{Lang::get('home.contact-link')}}" class="pull-left"  data-placement="top" >
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>{{Lang::get('home.ırak')}}  </strong></div>
                </a>
            </div>
            <div class="pointer p9 fadeIn animated wow" data-wow-duration="4.5s" data-wow-delay="4.5s">
                <a href="{{Lang::get('home.contact-link')}}" class="pull-left"  data-placement="top" >
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>{{Lang::get('home.afganistan')}}  </strong></div>
                </a>
            </div>
     </div>

        </div>

</div>
    @include('contact-form2')
    @include('frontend/footer2')
