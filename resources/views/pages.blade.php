


@include('frontend/header5')
@foreach($pages as $pages)

<?php $pageslang = DB::table('pages')->orderBy('id')->where('id','<',50)->where('author_id',$pages->author_id)->get();



foreach ($pageslang as $pageslang) { ?>
<?php


       $link2 = $pageslang->locale;

       if($pageslang->locale == 'tr')
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

      $link4[] = $pageslang->slug;
?>



<?php  }

?>
<link rel="alternate" hreflang="tr" href="/kontrolmatik/{{Lang::get($link4[3],[],'tr')}}" />
       <link rel="alternate" hreflang="en" href="/en/kontrolmatik/{{Lang::get($link4[0],[],'en')}}" />
       <link rel="alternate" hreflang="fr" href="/fr/kontrolmatik/{{Lang::get($link4[1],[],'fr')}}" />
       <link rel="alternate" hreflang="ar" href="/ar/kontrolmatik/{{Lang::get($link4[2],[],'ar')}}" />
<link rel="canonical" href="/{{$link3}}kontrolmatik/{{$pages->slug}}">

<ul class="nav navbar-nav navbar-right">
                <li class="dropdown languagebtn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{Lang::get('home.lang')}}  <i class="fas fa-globe"></i> </a>
                    <ul class="dropdown-menu language-drop">
                    <li>
                            <a href="/tr/kontrolmatik/{{Lang::get($link4[3],[],'tr')}}"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.tr')}}</a>
                        </li>
                        <li>
                            <a href="/en/kontrolmatik/{{Lang::get($link4[0],[],'en')}}"><span class="flag-icon flag-icon-gb"></span>  {{Lang::get('home.eng')}} </a>
                        </li>
                        <li>
                            <a href="/fr/kontrolmatik/{{Lang::get($link4[1],[],'fr')}}"><span class="flag-icon flag-icon-fr"></span>  {{Lang::get('home.fr')}} </a>
                        </li>
                        <li>
                            <a href="/ar/kontrolmatik/{{Lang::get($link4[2],[],'ar')}}"><span class="flag-icon flag-icon-ru"></span> {{Lang::get('home.ar')}}</a>
                        </li>
                    </ul>
                </li>
            </ul>




        </div>
    </header>

<div class="sp-cover" style="background-image: url(https://www.kontrolmatik.com/assets/media/1008/page-about.jpg)">
        <div class="container">
            <div class="content col-md-5">
                <div class="title">{{$pages->title}}</div>
                <div class="text">{{Lang::get('home.create')}}</div>
            </div>
        <div class="sp-vertical-nav sp-vertical-nav2">

    <ul>

    	<?php $pagesred = DB::table('pages')->orderBy('id')->where('id','<',50)->where('locale', Lang::getLocale())->get();

    	 foreach ($pagesred as $pagesred) { ?>

         <?php
            if($pagesred->locale == 'ar'){ ?>
            	<li><i class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/ar/kontrolmatik/{{$pagesred->slug}}">{{$pagesred->meta_description}}</a></li>
 			<?php }

 			else if($pagesred->locale == 'tr'){ ?>

 				<li><i class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/tr/kontrolmatik/{{$pagesred->slug}}">{{$pagesred->meta_description}}</a></li>
 		<?php 	}



                else{ ?>

            	<li><i class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/{{Lang::get('home.recaptcha')}}/kontrolmatik/{{$pagesred->slug}}">{{$pagesred->meta_description}}</a></li>	<?php } ?>

    	<?php }
    	 ?>
    </ul>

        </div>
        </div>
</div>

<div class="sp-content">
        <div class="container">
            <div><p>{!! Markdown::convertToHtml($pages->body) !!}</p>
                <?php

                if($pages->status == "ACTIVE"){ ?>

                  <div class="world-map globalmap">
        <div class="container">
            <div class="slogan animated wow fadeInUp">
            <div class="text1">{{Lang::get('home.more-than')}}</div>
            <div class="text2">{{Lang::get('home.more-than-desc')}}</div>
            </div>
            <div class="map-bg">
            <img class="img-responsive" width="100%" src="https://www.kontrolmatik.com/assets/images/world-map.png"/>
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



                <?php }

                 ?>


              <?php if($pages->media){ ?>
                 <img src="../main-laravel/laravel/storage/app/public/{{$pages->media}}"></p>
             <?php }  ?>

<p> </p>
<p>

<?php if($pages->image){ ?>
  <img style="width: 500px; height: 374.101px; display: block; margin-left: auto; margin-right: auto;" src="https://www.kontrolmatik.com/main-laravel/laravel/storage/app/public/{{$pages->image}}" alt="" data-udi="umb://media/de1432e87cc04d0982a25ea5531a882e" />

<?php } else{echo "";} ?>


</p>
</div>
        </div>
    </div>


    <div class="parallax-about">

        <div class="container">
            <div class="col-md-12">
                <h3 class="systempage">{{Lang::get('home.system')}}</h3>
                <p><p>{{Lang::get('home.system-desc')}}</p>



<p><img style="width: 280px; height: 160px; display: block; margin-left: auto; margin-right: auto;" src="/assets/media/1010/si-giants-20186189.png?width=280&amp;height=160" alt="" data-udi="umb://media/319d43ab40d7436ba8b9842e72784610" /></p></p>
            </div>
        </div>
    </div>





    @include('contact-form2');
    @include('frontend/footer2');

    <?php $pageslang = DB::table('pages')->orderBy('id')->where('author_id',$pages->author_id)->get();

           foreach ($pageslang as $pageslang) { ?>

           <?php
            if($pageslang->locale == 'tr'){


            }else{
                 } ?>

       <?php }

       ?>

    @endforeach()
