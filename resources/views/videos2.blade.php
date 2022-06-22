@include('frontend/header2')
<link rel="canonical" href="../videos">

<div class="sp-cover" style="background-image: url(../assets/media/1008/page-about.jpg)">
        <div class="container">
            <div class="content col-md-5">
            <div class="title">{{Lang::get('home.videos')}}</div>
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
            <div>
              @foreach($videos as $videos)
                <p><strong>{{$videos->video_adi}}</strong></p>
                <p><iframe width="360" height="203" src="{{$videos->youtube_link}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe> 
               <iframe width="360" height="203" src="{{$videos->youtube_link2}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe> </p>
               
              @endforeach();
        
           </div>
        </div>
    </div>




    <div class="parallax-about">

        <div class="container">
            <div class="col-md-12">
                 <h3>{{Lang::get('home.system')}}</h3>
                 <p><p>{{Lang::get('home.system-desc')}}</p>
               <p><img style="width: 280px; height: 160px; display: block; margin-left: auto; margin-right: auto;" src=/assets/media/1010/si-giants-20186189.png?width=280&amp;height=160" alt="" data-udi="umb://media/319d43ab40d7436ba8b9842e72784610" /></p></p>
            </div>




        </div>
    </div>





    @include('contact-form2')

    @include('frontend/footer2')
