@include('frontend/header5')

<link rel="alternate" hreflang="en" href="/en/brochures" />
<link rel="alternate" hreflang="tr" href="/brosurler" />
<link rel="alternate" hreflang="fr" href="/fr/brochures" />
<link rel="alternate" hreflang="ar" href="/ar/الكتيبات" />
<link rel="canonical" href="{{Lang::get('home.brochures-link')}}" />

<ul class="nav navbar-nav navbar-right">
                <li class="dropdown languagebtn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{Lang::get('home.lang')}}  <i class="fas fa-globe"></i> </a>
                    <ul class="dropdown-menu language-drop">
                    <li>
                            <a href="/brosurler"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.tr')}} </a>
                        </li>
                        <li>
                            <a href="/en/brochures"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.eng')}} </a>
                        </li>
                        <li>
                            <a href="/fr/brochures"><span class="flag-icon flag-icon-fr"></span>  {{Lang::get('home.fr')}} </a>
                        </li>
                        <li>
                            <a href="/ar/الكتيبات"><span class="flag-icon flag-icon-ru"></span> {{Lang::get('home.ar')}}</a>
                        </li>
                    </ul>
                </li>
            </ul>




        </div>
    </header>


<div class="sp-cover" style="background-image: url(../assets/media/1008/page-about.jpg)">
        <div class="container">
            <div class="content col-md-5">
                <div class="title">{{Lang::get('home.brochures')}}</div>
                <div class="text">{{Lang::get('home.create')}}</div>

            </div>
            <div class="sp-vertical-nav sp-vertical-nav2">

    <ul>
		<li><i class="fas fa-chevron-right"></i><a href="{{Lang::get('home.overview-link')}}">{{Lang::get('home.overview')}}</a></li>
		<li><i class="fas fa-chevron-right"></i><a href="{{Lang::get('home.safety-link')}}">{{Lang::get('home.safety')}}</a></li>
		<li><i class="fas fa-chevron-right"></i><a href="{{Lang::get('home.our-advantage-link')}}">{{Lang::get('home.our-advantage')}}</a></li>
		<li><i class="fas fa-chevron-right"></i><a href="{{Lang::get('home.locations-link')}}">{{Lang::get('home.locations')}}</a></li>
		<li><i class="fas fa-chevron-right"></i><a href="{{Lang::get('home.partnership-link')}}">{{Lang::get('home.partnership')}}</a></li>
		<li><i class="fas fa-chevron-right"></i><a href="{{Lang::get('home.brochures-link')}}">{{Lang::get('home.brochures')}}</a></li>
		<li><i class="fas fa-chevron-right"></i><a href="{{Lang::get('home.videos-link')}}">{{Lang::get('home.videos')}}</a></li>
		<li><i class="fas fa-chevron-right"></i><a href="{{Lang::get('home.join-us-link')}}">{{Lang::get('home.join-us')}}</a></li>
		<li><i class="fas fa-chevron-right"></i><a href="{{Lang::get('home.quality-link')}}">{{Lang::get('home.quality')}}</a></li>
    </ul>
            </div>
        </div>
    </div>

<div class="sp-content">
        <div class="container">
            <div><div class="col-md-12 homepdf">
         <div class="brochure">

        @foreach($brochures as $brochures)
        <a href="../main-laravel/laravel/storage/app/public/{{(json_decode($brochures->file))[0]->download_link}}" target="_blank">
        <div class="item col-md-3">
            <div class="icon"><i class="far fa-file-pdf"></i> PDF</div>
            <div class="name">{{$brochures->name}}</div>
        </div>
        </a>
        @endforeach()

       </div>

         </div></div>
        </div>
    </div>




    <div class="parallax-about">

        <div class="container">
            <div class="col-md-12">
            <h3>{{Lang::get('home.system')}}</h3>
            <p><p>{{Lang::get('home.system-desc')}}</p>
<p><img style="width: 280px; height: 160px; display: block; margin-left: auto; margin-right: auto;" src="/assets/media/1010/si-giants-20186189.png?width=280&amp;height=160" alt="" data-udi="umb://media/319d43ab40d7436ba8b9842e72784610" /></p></p>
            </div>


        </div>
    </div>


    @include('contact-form2')

    @include('frontend/footer2')
