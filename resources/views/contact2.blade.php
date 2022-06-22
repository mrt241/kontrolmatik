@include('frontend/header2')
    
<div class="sp-description">
            <div class="container">
            {{Lang::get('home.contact')}}
                <br> 

            </div>
        </div>

    <div class="sp-content">
        <div class="container" style="margin-top:30px;">
            <div class="row">
                 
       <div class="container second-portion">
        <div class="row">


         @foreach($contact as $contact)


            <!-- Boxes de Acoes -->
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">							
                    <div class="icon">
                        <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="info">
                            <h3 class="title">{{Lang::get('home.mail-website')}}</h3>
                            <p class="phonecontact">
                                <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;  {{$contact->contact_mail}}
 
                                <br>
                                <br>
                                <i class="fa fa-globe" aria-hidden="true"></i> &nbsp;  {{$contact->contact_website}}
 
                            </p>
                        
                        </div>
                    </div>
                    <div class="space"></div>
                </div> 
            </div>
                
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">							
                    <div class="icon">
                        <div class="image"><i class="fas fa-phone"></i></div>
                        <div class="info">
                            <h3 class="title">{{Lang::get('home.contact')}}</h3>
                            <p class="phonecontact">
                                <i class="fas fa-mobile-alt"></i> &nbsp; {{$contact->contact_phone1}}
                                <br>
                                <br>
                                <i class="fas fa-fax"></i> &nbsp;  {{$contact->contact_phone2}}
                            </p>
                        </div>
                    </div>
                    <div class="space"></div>
                </div> 
            </div>
                
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">							
                    <div class="icon">
                        <div class="image"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="info">
                            <h3 class="title">{{Lang::get('home.address')}}</h3>
                            <p class="phonecontact">
                                 <i class="fa fa-map-marker" style="margin-left: 25px;" aria-hidden="true"></i> &nbsp;&nbsp; {{$contact->contact_address}} 
                            </p>
                        </div>
                    </div>
                    <div class="space"></div>
                </div> 
            </div>		    
            <!-- /Boxes de Acoes -->
        @endforeach




            
            <!--My Portfolio  dont Copy this -->
            
    </div>
    
    </div>
            </div>
        </div>


    </div>
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
                <a href="contact" class="pull-left"  data-placement="top">
                    <i class="fas fa-map-marker-alt"></i><div class="name"><strong>{{Lang::get('home.germany')}}</strong></div>
                </a>
            </div>
        
            <div class="pointer p2 fadeIn animated wow" data-wow-duration="1.0s" data-wow-delay="1.0s">
                <a href="contact" class="pull-left" data-placement="top">
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>{{Lang::get('home.istanbul')}}</strong></div>
                </a>
            </div>     
            
            <div class="pointer p3 fadeIn animated wow" data-wow-duration="1.5s" data-wow-delay="1.5s">
                <a href="contact" class="pull-left" data-placement="top">
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>{{Lang::get('home.kazakistan')}}</strong><br> </div>
                </a>
            </div>
        
            <div class="pointer p4 fadeIn animated wow" data-wow-duration="2.0s" data-wow-delay="2.0s">
                <a href="contact" class="pull-left" data-placement="top">
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>{{Lang::get('home.sudan')}}  </strong></div>
                </a>
            </div>
        
            <div class="pointer p5 fadeIn animated wow" data-wow-duration="2.5s" data-wow-delay="2.5s">
                <a href="contact" class="pull-left" data-placement="top">
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>{{Lang::get('home.dubai')}}  </strong></div>
                </a>
            </div>
            
            <div class="pointer p6 fadeIn animated wow" data-wow-duration="3.0s" data-wow-delay="3.0s">
                <a href="contact" class="pull-left"  data-placement="top" >
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>{{Lang::get('home.etiyopya')}}  </strong></div>
                </a>
            </div>
            
            <div class="pointer p7 fadeIn animated wow" data-wow-duration="3.5s" data-wow-delay="3.5s">
                <a href="contact" class="pull-left"  data-placement="top" >
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>{{Lang::get('home.kenya')}}  </strong></div>
                </a>
            </div>
            <div class="pointer p8 fadeIn animated wow" data-wow-duration="4.0s" data-wow-delay="4.0s">
                <a href="contact" class="pull-left"  data-placement="top" >
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>{{Lang::get('home.ırak')}}  </strong></div>
                </a>
            </div>
            <div class="pointer p9 fadeIn animated wow" data-wow-duration="4.5s" data-wow-delay="4.5s">
                <a href="contact" class="pull-left"  data-placement="top" >
                <i class="fas fa-map-marker-alt"></i><div class="name"><strong>{{Lang::get('home.afganistan')}}  </strong></div>
                </a>
            </div>
     </div> 
    </div>
        
        
    </div>
    <!-- homefooter form -->
    @include('contact-form');
    <!-- homefooter form end -->
    @include('frontend/footer2')
