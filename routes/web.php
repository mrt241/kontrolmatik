<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', function () {
    if(app()->getLocale() == "en"){
        return view('anasayfaen');
    }else{
        return redirect(app()->getLocale());
    }
});

Route::get('/blog','slider@blogs');
Route::get('/blog-detail/{slug}','fonksiyon@blog_detail');
Route::get('/contact','fonksiyon@contact');

/*Route::get('/contact', function () {
    return view('contact');
});*/



Route::get('/referanslar','fonksiyon@index');
Route::get('/enerji-santralleri-ve-elektrik-iletim-ve-dagitimi','fonksiyon@power_tr');
Route::get('/organize-sanayi-bolgeleri','fonksiyon@zones_tr');
Route::get('/endustriyel-referanslar','fonksiyon@industrial_references_tr');
Route::get('/ulasim','fonksiyon@transportation_tr');
Route::get('/referans-detay/{slug}','fonksiyon@product_detailTR');
//Route::get('/hizmetler/{slug}','fonksiyon@servicesTR');

/*references en*/
Route::get('/references','fonksiyon@index');
Route::get('/power-generation','fonksiyon@power_generation');
Route::get('/transmission-substation','fonksiyon@transmission_substation');
Route::get('/distribution-industrial-zone','fonksiyon@distribution');
Route::get('/industrial-facilities','fonksiyon@facilities');
Route::get('/railway-and-transportation','fonksiyon@railway');
Route::get('/iot-cybersecurity','fonksiyon@iot_cyber');


/*references detail*/

 Route::get('/references-detail/{slug}','fonksiyon@product_detailEN');





/*services en*/
Route::get('/services/{slug}','fonksiyon@servicesEN');

/*sector en*/

Route::get('/sector/{slug}','fonksiyon@sectorEN');

/*pages en*/
Route::get('/kontrolmatik/{slug}','fonksiyon@pagesEN');



Route::get('/brochures','fonksiyon@brochuresEN');
Route::get('/videos','fonksiyon@videos');


    Route::get('/blog-categories/ag','fonksiyon@blog_categories_ag');
    Route::get('/blog-categories/asset-management','fonksiyon@blog_categories_assets');
    Route::get('/blog-categories/award','fonksiyon@blog_categories_award');
    Route::get('/blog-categories/cyber-security','fonksiyon@blog_categories_cyber_security');
    Route::get('/blog-categories/dcs','fonksiyon@blog_categories_dcs');
    Route::get('/blog-categories/egitim','fonksiyon@blog_categories_egitim');
    Route::get('/blog-categories/endustri-4.0','fonksiyon@blog_categories_endustri_4');
    Route::get('/blog-categories/endustriyel-kontrol-sistemleri','fonksiyon@blog_categories_endustriyel_kontrol_sistemleri');
    Route::get('/blog-categories/firewall','fonksiyon@blog_categories_firewall');
    Route::get('/blog-categories/guvenlik-duvari','fonksiyon@blog_categories_guvenlik_duvari');
    Route::get('/blog-categories/ics','fonksiyon@blog_categories_ics');
    Route::get('/blog-categories/industry-4.0','fonksiyon@blog_categories_industry_4');
    Route::get('/blog-categories/internet-of-things','fonksiyon@blog_categories_internet_of_things');
    Route::get('/blog-categories/kontrolmatik','fonksiyon@blog_categories_kontrolmatik');
    Route::get('/blog-categories/mobile-substation','fonksiyon@blog_categories_mobile_substation');
    Route::get('/blog-categories/nesnelerin-interneti','fonksiyon@blog_categories_nesnelerin_interneti');
    Route::get('/blog-categories/network','fonksiyon@blog_categories_network');
    Route::get('/blog-categories/odul','fonksiyon@blog_categories_odul');
    Route::get('/blog-categories/industrial-automation','fonksiyon@blog_categories_otomasyon');
    Route::get('/blog-categories/partnership','fonksiyon@blog_categories_partnership');
    Route::get('/blog-categories/projeler','fonksiyon@blog_categories_projeler');
    Route::get('/blog-categories/scada','fonksiyon@blog_categories_scada');
    Route::get('/blog-categories/siber-guvenlik','fonksiyon@blog_categories_siber_guvenlik');
    Route::get('/blog-categories/technologies','fonksiyon@blog_categories_technologies');
    Route::get('/blog-categories/training','fonksiyon@blog_categories_training');




Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => 'ar|tr|fr'],
    'middleware' => 'setlocale'
], function() {

    Route::get('/', function ($lang){
        return view('anasayfa'.$lang);

        //dil değiştirince eski urlin farklı çevirili haline gitmek için buna benzer bir yol
        /*
        $portions = explode("/", url()->previous());
        if(count($portions) > 4){
            $portions[3] = $lang;
            $newUrl = implode( "/", $portions );
            return redirect($newUrl);
        }
        else{
            return view('anasayfa'.$lang);
        }
        */
    });






    //Route::get('/ofisler', function () {
      //  return view('locations');
    //});

    //Route::get('/مواقع', function () {
      //  return view('locations');
    //});


    Route::get('/blog','slider@blogs');
    Route::get('/blog-detay/{slug}','fonksiyon@blog_detailtr');


    Route::get('/contact', function () {
        return view('contact');
    });

    Route::get('/iletisim', function () {
        return view('contact');
    });

    Route::get('/taslak-izahname', function () {
        return view('investor');
    });

    Route::get('/fon-kullanim', function () {
        return view('investor2');
    });

    /*Route::get('/faaliyet-raporu', function () {
        return view('faaliyet_raporu');
    });*/
    
    Route::get('/yatirimci-iliskileri/faaliyet', function(){
        
        return view('faaliyets');
        
    });
    
     Route::get('/duyurular', function(){
        
        return view('faaliyets');
        
    });
    
    /*  Route::get('/faaliyet', function () {
        return view('faaliyet');
    });*/
    
    
    Route::get('/اتصل', function () {
        return view('contact');
    });




    Route::get('/referanslar','fonksiyon@index');
    Route::get('/references','fonksiyon@index');
    Route::get('/المراجع','fonksiyon@index');

//Route::get('/referencess/{id}/{ref_id}','fonksiyon@references_kategori');


    Route::get('/elektrik-uretimi','fonksiyon@elektrik_tr');
    Route::get('/iletim-hatti-ve-trafo-merkezi','fonksiyon@iletim_tr');
    Route::get('/dagitim-ve-sanayi-bolgesi','fonksiyon@dagitim_tr');
    Route::get('/endustriyel-tesisler','fonksiyon@endustriyel_tr');
    Route::get('/demiryolu-ve-ulasim','fonksiyon@demiryolu_tr');
    Route::get('/nesnelerin-interneti-ve-siber-guvenlik','fonksiyon@nesne_tr');




    Route::get('/power-plant-and-transmission','fonksiyon@power');
    Route::get('/enerji-santralleri-ve-elektrik-iletim-ve-dagitimi','fonksiyon@power_tr');
    Route::get('/centrale-denergie','fonksiyon@power_fr');
    Route::get('/محطة-توليد-الكهرباء-ونقلها','fonksiyon@power_ar');

    Route::get('/industrial-zones','fonksiyon@zones');
    Route::get('/organize-sanayi-bolgeleri','fonksiyon@zones_tr');
    Route::get('/zones-industrielles','fonksiyon@zones_fr');
    Route::get('/المناطق-الصناعية','fonksiyon@zones_ar');

    Route::get('/industrial-references','fonksiyon@industrial_references');
    Route::get('/endustriyel-referanslar','fonksiyon@industrial_references_tr');
    Route::get('/references-industrielles','fonksiyon@industrial_references_fr');
    Route::get('/المراجع-الصناعية','fonksiyon@industrial_references_ar');

    Route::get('/transportation','fonksiyon@transportation');
    Route::get('/ulasim','fonksiyon@transportation_tr');
    Route::get('/transport','fonksiyon@transportation_fr');
    Route::get('/وسائل-لنقل','fonksiyon@transportation_ar');


    Route::get('/referans-detay/{slug}','fonksiyon@product_detail');
    Route::get('/references-detail/{slug}','fonksiyon@product_detail');
    Route::get('/مرجع-التفاصيل/{slug}','fonksiyon@product_detail');

/*pages tr*/
Route::get('/kontrolmatik/{slug}','fonksiyon@pages');
    Route::get('/yatirimci-iliskileri/{slug}','fonksiyon@pages2');


/*services tr*/
    Route::get('/cozumler/{slug}','fonksiyon@services');

    Route::get('/hizmetler/{slug}','fonksiyon@services');
    Route::get('/services/{slug}','fonksiyon@services');
    Route::get('/خدمات/{slug}','fonksiyon@services');


   /*sector tr*/

    Route::get('/sektor/{slug}','fonksiyon@sector');
    Route::get('/secteurs/{slug}','fonksiyon@sector');
    Route::get('/القطاعات/{slug}','fonksiyon@sector');

    Route::get('/brosurler','fonksiyon@brochures');

    Route::get('/الكتيبات','fonksiyon@brochures');

    Route::get('/contact','fonksiyon@contact');
    Route::get('/iletisim','fonksiyon@contact');
    Route::get('/اتصل','fonksiyon@contact');

    Route::get('/videos','fonksiyon@videos');
    Route::get('/videolar','fonksiyon@videos');
    Route::get('/فيديو','fonksiyon@videos');



    /*blog kategori tr*/

    Route::get('/blog-kategori/odul','fonksiyon@blog_categories_odul');
    Route::get('/blog-kategori/endustri-4.0','fonksiyon@blog_categories_endustri_4');
    Route::get('/blog-kategori/siber-guvenlik','fonksiyon@blog_categories_siber_guvenlik');
    Route::get('/blog-kategori/dcs','fonksiyon@blog_categories_dcs_tr');
    Route::get('/blog-kategori/guvenlik-duvari','fonksiyon@blog_categories_guvenlik_duvari');
    Route::get('/blog-kategori/ics','fonksiyon@blog_categories_ics_tr');
    Route::get('/blog-kategori/nesnelerin-interneti','fonksiyon@blog_categories_nesnelerin_interneti');
    Route::get('/blog-kategori/kontrolmatik','fonksiyon@blog_categories_kontrolmatik_tr');
    Route::get('/blog-kategori/mobil-trafo-merkezi','fonksiyon@blog_categories_mobil_trafo_merkezi');
    Route::get('/blog-kategori/ag','fonksiyon@blog_categories_ag');
    Route::get('/blog-kategori/endustriyel-otomasyon','fonksiyon@blog_categories_endustriyel_otomasyon');
    Route::get('/blog-kategori/ortaklik','fonksiyon@blog_categories_ortaklik');
    Route::get('/blog-kategori/scada','fonksiyon@blog_categories_scada_tr');
    Route::get('/blog-kategori/teknoloji','fonksiyon@blog_categories_teknoloji');
    Route::get('/blog-kategori/egitim','fonksiyon@blog_categories_egitim');
    Route::get('/blog-kategori/varlik-yonetimi','fonksiyon@blog_categories_varlik_yonetimi');


//Route::get('/blog-{id}','fonksiyon@category_ag');
    /*Route::get('/en/blog','fonksiyon@blog_islem');
    Route::get('/fr/bloc','fonksiyon@blog_islem');
    Route::get('/ar/مدونة','fonksiyon@blog_islem');*/
//Route::get('blog-categories/{slug}{id}','fonksiyon@blog_categories');









});
//Route::get('/','slider@index');

/*Route::get('/en', function () {
    return view('anasayfa1');
});

Route::get('/fr', function () {
    return view('anasayfa2');
});

Route::get('/ar', function () {
    return view('anasayfa3');
});*/


/*Route::get('/en/blog', function () {

     $blogs =  blog::where('locale',Lang::getLocale())->where('featured','1')->get();
    return view('blogs');
});*/

//Route::get('/ders', 'ders@cek');




Route::post('/send','slider@mail_fonksiyon');



Route::get('404',['as'=>'404','uses'=>'fonksiyon@errorCode404']);

//Route::get('/{lang}','LangController@index');


/*Contact için gerekli olan yönlendirme kodları*/
