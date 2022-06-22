@include('frontend/header5')

@foreach($sector as $sector)



     <?php $sectorlang = DB::table('sector')->orderBy('id')->where('author_id',$sector->author_id)->get();


           foreach ($sectorlang as $sectorlang) { ?>

<?php


                  $link2 = $sectorlang->locale;

                  if($sectorlang->locale == 'tr')
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

                 $link4[] = $sectorlang->slug;

           ?>



       <?php }

       ?>
<!--
       <link rel="alternate" hreflang="tr" href="/sektor/{{Lang::get($link4[3],[],'tr')}}" />
       <link rel="alternate" hreflang="en" href="/en/sector/{{Lang::get($link4[0],[],'en')}}" />
       <link rel="alternate" hreflang="fr" href="/fr/secteurs/{{Lang::get($link4[1],[],'fr')}}" />
       <link rel="alternate" hreflang="ar" href="/ar/القطاعات/{{$link4[2]}}" />

     -->

<link rel="canonical" href="/{{$link3}}{{Lang::get('home.sector')}}/{{$sector->slug}}">

<ul class="nav navbar-nav navbar-right">

<li class="dropdown languagebtn">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{Lang::get('home.lang')}}  <i class="fas fa-globe"></i> </a>
    <ul class="dropdown-menu language-drop">
    <li>
              <a href="/tr/sektor/{{Lang::get($link4[3],[],'tr')}}"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.tr')}} </a>
          </li>
        <li>
            <a href="/en/sector/{{Lang::get($link4[0],[],'en')}}"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.eng')}} </a>
        </li>
        <li>
          <a href="/fr/secteurs/{{Lang::get($link4[1],[],'fr')}}"><span class="flag-icon flag-icon-fr"></span>  {{Lang::get('home.fr')}} </a>
        </li>
       <li>
            <a href="/ar/القطاعات/{{$link4[2]}}"><span class="flag-icon flag-icon-ru"></span> {{Lang::get('home.ar')}}</a>
        </li>

    </ul>
</li>
<!--
<li class="dropdown languagebtn">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{Lang::get('home.lang')}}  <i class="fas fa-globe"></i> </a>
    <ul class="dropdown-menu language-drop">
    <li>
              <a href="/sektor/"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.tr')}} </a>
          </li>
        <li>
            <a href="/en/sector/"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.eng')}} </a>
        </li>
        <li>
          <a href="/fr/secteurs/"><span class="flag-icon flag-icon-fr"></span>  {{Lang::get('home.fr')}} </a>
        </li>
       <li>
            <a href="/ar/القطاعات/"><span class="flag-icon flag-icon-ru"></span> {{Lang::get('home.ar')}}</a>
        </li>

    </ul>
</li>

-->
</ul>

</div>
</header>
<div class="sp-nav">
<div class="container">

    <!-- <ul>
        <li class="<?php if($sector['slug'] == 'energy'){echo 'active';} else if($sector['slug'] == 'energie'){echo 'active';} else if($sector['slug'] == 'الطاقة'){echo 'active';}?>">
          <a href="../{{Lang::get('home.energy-link')}}">{{Lang::get('home.energy')}}</a>
        </li>
        <li class="<?php if($sector['slug'] == 'industrial-facilities'){echo 'active';} else if($sector['slug'] == 'installations-industrielles'){echo 'active';} else if($sector['slug'] == 'منشأت-صناعية'){echo 'active';} ?>">
          <a href="../{{Lang::get('home.industrial-facilities-link')}}">{{Lang::get('home.industrial-facilities')}}</a>
        </li>
        <li class="<?php if($sector['slug'] == 'mining'){echo 'active';}else if($sector['slug'] == 'miniere'){echo 'active';} else if($sector['slug'] == 'تعدين'){echo 'active';} ?>">
          <a href="../{{Lang::get('home.mining-link')}}">{{Lang::get('home.mining')}}</a>
        </li>
        <li class="<?php if($sector['slug'] == 'transportation'){echo 'active';} else if($sector['slug'] == 'transport'){echo 'active';} else if($sector['slug'] == 'وسائل-النقل'){echo 'active';}?>">
          <a href="../{{Lang::get('home.transportation-link')}}">{{Lang::get('home.transportation')}}</a>
        </li>
     </ul>
    -->
      @if(Lang::getLocale() == 'en')
        {{menu('sector_menu_en','bootstrap')}}
      @elseif(Lang::getLocale() == 'tr')
       {{menu('sector_menu_tr','bootstrap')}}
      @elseif(Lang::getLocale() == 'fr')
       {{menu('sector_menu_fr','bootstrap')}}
      @elseif(Lang::getLocale() == 'ar')
       {{menu('sector_menu_ar','bootstrap')}}
      @endif
</div>
</div>


<div class="sp-description">
        <div class="container">
            {{$sector->sector_name}}
        </div>
</div>
 <div class="sp-content">
        <div class="container">
    <div class="row">
    <div class="col-sm-12">
    <div class="col-md-7">{!! Markdown::convertToHtml($sector->sector_desc) !!}</div>

    <div class="col-md-5">
    	<?php if (isset($sector->sector_image)) { ?>
    		<img class="sector-img" src="../../main-laravel/laravel/storage/app/public\{{$sector->sector_image}}" alt="" data-udi="umb://media/17e2e78ce7494d7a866a3d4633436b2a" />

    <?php	} else{ echo '';} ?>


    </div>

    </div>
    </div>
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



    @endforeach()

    <!-- HOME TAB -->
    <div class="hometab-title">
        <div class="container">
            <h2 class="animated fadeInUp wow">{{Lang::get('home.services')}}</h2>
            <div class="desc">{{Lang::get('home.services-desc')}}</div>
        </div>
    </div>
    <!-- HOME TAB END -->
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


    @include('frontend/footer3')
