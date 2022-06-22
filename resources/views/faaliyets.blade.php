@include('frontend/header5')

</div>
   </header>

<div class="sp-content">

        <div class="container">

          <div  style="float:left;" class="sp-vertical-nav sp-vertical-nav2 col-md-3">

        <ul>

        
           
          <li><i style="color:white;" class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/tr/yatirimci-iliskileri/faaliyet-raporu">Faaliyet Raporum</a></li>
        
        
           
          <li><i style="color:white;" class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/tr/yatirimci-iliskileri/ticaret-sicil-bilgileri">Ticaret Sicil Bilgileri</a></li>
        
        
           
          <li><i style="color:white;" class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/tr/yatirimci-iliskileri/yonetim-kurulu">Yönetim Kurulu</a></li>
        
        
           
          <li><i style="color:white;" class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/tr/yatirimci-iliskileri/yatirimci-iliskileri-birimi">Yatırımcı İlişkileri Birimi</a></li>
        
        
           
          <li><i style="color:white;" class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/tr/yatirimci-iliskileri/i-letisim">İletişim</a></li>
        
        
           
          <li><i style="color:white;" class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/tr/yatirimci-iliskileri/ortaklik-yapisi">Ortaklık Yapısı</a></li>
        
        
           
          <li><i style="color:white;" class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/tr/yatirimci-iliskileri/mali-tablo-ve-raporlar">Mali Tablo ve Raporlar</a></li>
        
        
           
          <li><i style="color:white;" class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/tr/yatirimci-iliskileri/sunumlar">Sunumlar</a></li>
        
        
           
          <li><i style="color:white;" class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/tr/yatirimci-iliskileri/halka-arz-bilgileri">Halka Arz Bilgileri</a></li>
        
        
           
          <li><i style="color:white;" class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/tr/yatirimci-iliskileri/faaliyet">Duyurular</a></li>
        
        
           
          <li><i style="color:white;" class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/tr/yatirimci-iliskileri/kar-dagitim-politikasi">Kar Dağıtım Politikası</a></li>
        
        
           
          <li><i style="color:white;" class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/tr/yatirimci-iliskileri/bilgilendirme-politikasi">Bilgilendirme Politikası</a></li>
        
        <li><i style="color:white;" class="fas fa-chevron-right"></i><a href="https://www.kontrolmatik.com/tr/yatirimci-iliskileri/kurumsal-yonetim">Kurumsal Yönetim</a></li>
        
                </ul>

          </div>

            <div  style="float:left;margin:0 0 0 20px" class="col-md-8">
            	
              <h3>Duyurular</h3>
            
              <?php if(1>0){  ?>
			
			<?php $duyurulist = DB::table('faaliyet')->orderBy('id','desc')->limit(150)->get();
			
			foreach($duyurulist as $duyurulistem){ ?>
			
	            <div class="col-md-12 right">
	            <div class="col-md-10"><p>* {{$duyurulistem->baslik}}</p></div>
	            <div class="col-md-2">

                    <button style="width:100%;" class="btn btn-secondary">
                        <a target="_blank" href="https://www.kontrolmatik.com/main-laravel/laravel/storage/app/public/{{$duyurulistem->flink}}">PDF</a>
                    </button>
	        
	            </div>
	            </div>
	         
          <?php  }  ?>
			    
              <?php 
            
                $ay = isset($_GET['ay']);
                $yil = isset($_GET['yil']);
                
              $duyuru1 =  DB::table('faaliyet')->orderBy('id','desc')->where('ay',$ay)->where('yil',$yil)->get();
              
              foreach ($duyuru1 as $duyuru)  { ?>
			
	            <div class="col-md-12 right">
	            <div class="col-md-10"><p>{{$duyuru->baslik}}</p></div>
	           <!-- <div class="col-md-2"><p>{{$duyuru->created_at}}</p></div>-->
	            <div class="col-md-2"><button style="width:100%;"><a target="_blank" href="https://www.kontrolmatik.com/main-laravel/laravel/storage/app/public/{{(json_decode($duyuru->dosya))[0]->download_link}}">PDF</a></button></div>
	        
	            </div>
	         
            <?php  } } 
            
            else { ?>
                
                <form id="duyuru-form"  action="https://www.kontrolmatik.com/tr/duyurular" method="get">
            {{ csrf_field() }}
            <div class="col-md-12 right">
            <div class="col-md-4">
			   <div class="form-group">
			    <label for="exampleInputEmail1">Ay</label>
			  <select class="form-control" name="ay" id="ay">
			  	<option  value="Ocak">Ocak</option>
			  	<option   value="Şubat">Şubat</option>
			  	<option value="Mart">Mart</option>
			  	<option  value="Nisan">Nisan</option>
			  	<option   value="Mayıs">Mayıs</option>
			  	<option   value="Haziran">Haziran</option>
			  	<option  value="Temmuz">Temmuz</option>
			  	<option  value="Ağustos">Ağustos</option>
			  	<option  value="Eylül">Eylül</option>
			  	<option  value="Ekim">Ekim</option>
			  	<option  value="Kasım">Kasım</option>
			  	<option  value="Aralık">Aralık</option>
			  </select>
			    
			  </div>
			</div>

			 <div class="col-md-4">
			   <div class="form-group">
			    <label for="exampleInputEmail1">Yıl</label>
			  <select class="form-control" name="yil" id="yil">
			  
			  	<option value="2020">2020</option>
			  	<option value="2021">2021</option>
			  </select>
			    
			  </div>
			</div>

			 <div class="col-md-4">
			   <div class="form-group">
			    <label for="exampleInputEmail1">Filtrele</label><br>
			 <button type="submit" class="btn btn-primary" id="ara" name="ara">Göster</button>
			    
			  </div>
			</div>
			</form>
                
              <?php  
             
                $duyuru2 = DB::table('faaliyet')->orderBy('id','desc')->limit(8)->get();
                foreach ($duyuru2 as $duyuru2)  { ?>
                
                
			
	            <div class="col-md-12 right">
	            <div class="col-md-10"><p>* {{$duyuru2->baslik}}</p></div>
	            <div class="col-md-2"><button style="width:100%;"><a target="_blank" href="../main-laravel/laravel/storage/app/public/{{(json_decode($duyuru2->dosya))[0]->download_link}}">PDF</a></button></div>
	        
	            </div>
	         
            <?php  } } ?>
                
    
            
            
			 


            </div>
            </div>
            </div>
            </div>
            
  
          
          