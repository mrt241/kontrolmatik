


@include('frontend/header5')
@foreach($pages as $pages)

<?php $pageslang = DB::table('pages')->orderBy('id')->where('author_id',$pages->author_id)->get();



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
<style>

.sp-vertical-nav {z-index:1000;}
.sp-vertical-nav2{z-index:1000;}
.sp-vertical-nav ul li a{z-index: 1000;}
</style>


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



<div class="sp-content">

        <div class="container">

          <div  style="float:left;" class="sp-vertical-nav sp-vertical-nav2 col-md-3">

        <ul>

        <?php $pagesred = DB::table('pages')->orderBy('id')->where('id','>',50)->where('locale', Lang::getLocale())->get();

         foreach ($pagesred as $pagesred) { ?>

           <?php
              if($pagesred->locale == 'ar'){ ?>
                <li><i style="color:white;" class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/ar/yatirimci-iliskileri/{{$pagesred->slug}}">{{$pagesred->meta_description}}</a></li>
        <?php }

        else if($pagesred->locale == 'tr'){ ?>

          <li><i style="color:white;" class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/tr/yatirimci-iliskileri/{{$pagesred->slug}}">{{$pagesred->meta_description}}</a></li>
        <?php 	}



                  else{ ?>

                <li><i style="color:white;" class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/{{Lang::get('home.recaptcha')}}/yatirimci-iliskileri/{{$pagesred->slug}}">{{$pagesred->meta_description}}</a></li>	<?php } ?>

        <?php }
         ?>
        </ul>

          </div>

            <div style="padding:10px;z-index:0;" class="col-md-9">
              <div   class="title">{{$pages->title}}</div>

<div id="newlink">
              <p >{!! Markdown::convertToHtml($pages->body) !!}</p> </div>
                <?php

                if($pages->status == "ACTIVE"){ ?>




                <?php }

                 ?>


              <?php if($pages->media){ ?>
                 <img src="../main-laravel/laravel/storage/app/public/{{$pages->media}}"></p>
             <?php }  ?>

<p>

<?php if($pages->image){ ?>
  <img style="width: 500px; height: 374.101px; display: block; margin-left: auto; margin-right: auto;" src="../main-laravel/laravel/storage/app/public/{{$pages->image}}" alt="" data-udi="umb://media/de1432e87cc04d0982a25ea5531a882e" />

<?php } else{echo "";} ?>


</p>
</div>
        </div>
    </div>








    @include('contact-form2');
    <script>

    window.onload = function(){
      var anchors = document.getElementById('newlink').getElementsByTagName('a');
      for (var i=0; i<anchors.length; i++){
        anchors[i].setAttribute('target', '_blank');
      }
    }



    </script>

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
