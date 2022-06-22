<?php

namespace App\Http\Controllers;

use App\Captcha;
use App\Reference;
use App\Contact;
use App\Product;
use App\Translation;
use App\Pages;
use App\Services;
use App\Sector;
use App\Brochure;
use App\Videolar;
use App\Post;
use App\Blog;
use App\Faaliyet;
use App\Category;
use Session;
use Redirect;
use Lang;
use Mail;

/*Session Redirect Lang Kısımlarının alınması gerekmektedir.*/


use View;
use Illuminate\Http\Request;

class Fonksiyon extends Controller
{
    function index()
    {

        $reference = reference::where('locale', Lang::getLocale())->orderBy('sira')->get();
        return View::make('reference')->with('ref', $reference);

    }


    /*function references_kategori($id,$ref_id){

      $ref_cat =  product::where('reference_id',$ref_id)->all();
      return View::make('power_plant2')->with('ref_cat', $ref_cat);

    }*/
  
    function contact()
    {

        $contact = contact::where('locale', Lang::getLocale())->get();
        return View::make('contact')->with('contact', $contact);

    }



    function elektrik_tr(){

        $posts = product::where('locale', Lang::getLocale())->where('reference_id', '27')->get();
        return View::make('power_generation')->with('posts', $posts);

    }





    function iletim_tr(){

        $posts = product::where('locale', Lang::getLocale())->where('reference_id', '28')->get();
        return View::make('transmission')->with('posts', $posts);

    }

    function dagitim_tr(){

        $posts = product::where('locale', Lang::getLocale())->where('reference_id', '29')->get();
        return View::make('distribution')->with('posts', $posts);

    }

    function endustriyel_tr(){

        $posts = product::where('locale', Lang::getLocale())->where('reference_id', '30')->get();
        return View::make('facilities')->with('posts', $posts);

    }

     function demiryolu_tr(){

        $posts = product::where('locale', Lang::getLocale())->where('reference_id', '31')->get();
        return View::make('railway')->with('posts', $posts);

    }
     function nesne_tr(){

        $posts = product::where('locale', Lang::getLocale())->where('reference_id', '32')->get();
        return View::make('iot_cyber')->with('posts', $posts);

    }








    function power_generation(){

        $posts = product::where('locale', Lang::getLocale())->where('reference_id', '21')->get();
        return View::make('power_generation')->with('posts', $posts);

    }

    function transmission_substation(){

        $posts = product::where('locale', Lang::getLocale())->where('reference_id', '22')->get();
        return View::make('transmission')->with('posts', $posts);

    }

     function distribution(){

        $posts = product::where('locale', Lang::getLocale())->where('reference_id', '23')->get();
        return View::make('distribution')->with('posts', $posts);

    }

     function facilities(){

        $posts = product::where('locale', Lang::getLocale())->where('reference_id', '24')->get();
        return View::make('facilities')->with('posts', $posts);

    }

    function railway(){

        $posts = product::where('locale', Lang::getLocale())->where('reference_id', '25')->get();
        return View::make('railway')->with('posts', $posts);

    }

     function iot_cyber(){

        $posts = product::where('locale', Lang::getLocale())->where('reference_id', '26')->get();
        return View::make('iot_cyber')->with('posts', $posts);

    }


    function power()
    {
        /*$power_plant =  product::where("reference_id","1")->get();
        return View::make('power_plant')->with('power_plant', $power_plant);
        */
        //$posts = translation::where('table_name','posts')->get();
        $posts = product::where('locale', Lang::getLocale())->where('reference_id', '1')->get();
        return View::make('power_plant')->with('posts', $posts);
    }

    function power_tr()
    {

        $posts = product::where('locale', Lang::getLocale())->where('reference_id', '14')->get();
        return View::make('power_plant')->with('posts', $posts);

    }


    function power_fr()
    {

        $posts = product::where('locale', Lang::getLocale())->where('reference_id', '5')->get();
        return View::make('power_plant')->with('posts', $posts);

    }

    function power_ar()
    {

        $posts = product::where('locale', Lang::getLocale())->where('reference_id', '9')->get();
        return View::make('power_plant')->with('posts', $posts);

    }

    function zones()
    {

        $zones = product::where('locale', Lang::getLocale())->where("reference_id", "2")->get();
        return View::make('industrial-zones')->with('zones', $zones);

    }

    function zones_tr()
    {

        $zones = product::where('locale', Lang::getLocale())->where("reference_id", "15")->get();
        return View::make('industrial-zones')->with('zones', $zones);

    }

    function zones_fr()
    {

        $zones = product::where('locale', Lang::getLocale())->where("reference_id", "6")->get();
        return View::make('industrial-zones')->with('zones', $zones);

    }

    function zones_ar()
    {

        $zones = product::where('locale', Lang::getLocale())->where("reference_id", "10")->get();
        return View::make('industrial-zones')->with('zones', $zones);

    }

    function industrial_references()
    {

        $industrial_references = product::where("reference_id", "3")->get();
        return View::make('industrial_references')->with('industrial_references', $industrial_references);

    }

    function industrial_references_tr()
    {

        $industrial_references = product::where("reference_id", "16")->get();
        return View::make('industrial_references')->with('industrial_references', $industrial_references);

    }

    function industrial_references_fr()
    {

        $industrial_references = product::where("reference_id", "7")->get();
        return View::make('industrial_references')->with('industrial_references', $industrial_references);

    }

    function industrial_references_ar()
    {

        $industrial_references = product::where("reference_id", "11")->get();
        return View::make('industrial_references')->with('industrial_references', $industrial_references);

    }

    function transportation()
    {

        $transportation = product::where('locale', Lang::getLocale())->where("reference_id", "4")->get();
        return View::make('transportation')->with('transportation', $transportation);

    }

    function transportation_tr()
    {

        $transportation = product::where('locale', Lang::getLocale())->where("reference_id", "17")->get();
        return View::make('transportation')->with('transportation', $transportation);

    }

    function transportation_fr()
    {

        $transportation = product::where('locale', Lang::getLocale())->where("reference_id", "8")->get();
        return View::make('transportation')->with('transportation', $transportation);

    }

    function transportation_ar()
    {

        $transportation = product::where('locale', Lang::getLocale())->where("reference_id", "12")->get();
        return View::make('transportation')->with('transportation', $transportation);

    }


    function product_detail($lang="tr", $slug)
    {

        $detail = product::where('locale', Lang::getLocale())->where('slug', $slug)->get();
        if (count($detail)) {

            return View::make('product_detail')->with('detail', $detail);
        } else {
            //return View::make('errors/404');
            return $this->errorCode404();
        }

    }

    function product_detailTR($slug)
    {

        $detail = product::where('locale', "tr")->where('slug', $slug)->get();
        if (count($detail)) {

            return View::make('product_detail')->with('detail', $detail);
        } else {
            //return View::make('errors/404');
            return $this->errorCode404();
        }

    }

      function product_detailEN($slug)
    {

        $detail = product::where('locale', "en")->where('slug', $slug)->get();
        if (count($detail)) {

            return View::make('product_detail')->with('detail', $detail);
        } else {
            //return View::make('errors/404');
            return $this->errorCode404();
        }

    }

    function pages($lang="tr", $slug)
    {

        $pages = pages::where("slug", $slug)->where('locale', Lang::getLocale())->get();

        if (count($pages) > 0) {


            return View::make('pages')->with('pages', $pages);
        } else {

            //return View::make('errors/404');
            // return redirect()->route('404');
            //return $this->errorCode404();
            abort(404);
        }
    }

    function pages2($lang="tr", $slug)
    {

        $pages = pages::where("slug", $slug)->where('locale', Lang::getLocale())->get();

        if (count($pages) > 0) {


            return View::make('pages2')->with('pages', $pages);
        } else {

            //return View::make('errors/404');
            // return redirect()->route('404');
            //return $this->errorCode404();
            abort(404);
        }
    }

    function pagesTR($slug)
    {

        $pages = pages::where("slug", $slug)->where('locale', "tr")->get();

        if (count($pages) > 0) {


            return View::make('pages')->with('pages', $pages);
        } else {

            //return View::make('errors/404');
            // return redirect()->route('404');
            //return $this->errorCode404();
            abort(404);
        }
    }


        function pagesEN($slug)
    {

        $pages = pages::where("slug", $slug)->where('locale', "en")->get();

        if (count($pages) > 0) {


            return View::make('pages')->with('pages', $pages);
        } else {

            //return View::make('errors/404');
            // return redirect()->route('404');
            //return $this->errorCode404();
            abort(404);
        }
    }




    function pages_fr($lang="fr", $slug)
    {

        $pages = pages::where("slug", $slug)->where('locale', Lang::getLocale())->get();
        return View::make('pages_fr')->with('pages', $pages);

    }

    function services($lang="tr", $slug)
    {

        $servicesTR = services::where("slug", $slug)->where('locale', Lang::getLocale())->get();
        if (count($servicesTR)) {
            return View::make('services')->with('services', $servicesTR);
        } else {
            //return View::make('errors/404');
            //return $this->errorCode404();
            abort(404);
        }
    }

    function servicesTR($slug)
    {

        $services = services::where("slug", $slug)->where('locale', "tr")->get();
        if (count($services)) {
            return View::make('services')->with('services', $services);
        } else {
            //return View::make('errors/404');
            //return $this->errorCode404();
            abort(404);
        }
    }

     function servicesEN($slug)
    {

        $services = services::where("slug", $slug)->where('locale', "en")->get();
        if (count($services)) {
            return View::make('services')->with('services', $services);
        } else {
            //return View::make('errors/404');
            //return $this->errorCode404();
            abort(404);
        }
    }

    function sector($lang="tr", $slug)
    {
        $sector = sector::where("slug", $slug)->where('locale', Lang::getLocale())->get();
        if (count($sector)) {
            return View::make('sector')->with('sector', $sector);
        } else {
            //return View::make('errors/404');
            //return $this->errorCode404();
            abort(404);
        }
    }

    function sectorTR($slug)
    {
        $sector = sector::where("slug", $slug)->where('locale', "tr")->get();
        if (count($sector)) {
            return View::make('sector')->with('sector', $sector);
        } else {
            //return View::make('errors/404');
            //return $this->errorCode404();
            abort(404);
        }
    }

     function sectorEN($slug)
    {
        $sector = sector::where("slug", $slug)->where('locale', "en")->get();
        if (count($sector)) {
            return View::make('sector')->with('sector', $sector);
        } else {
            //return View::make('errors/404');
            //return $this->errorCode404();
            abort(404);
        }
    }

    function brochures($lang="tr")
    {
        $brochures = brochure::where('locale', Lang::getLocale())->get();
        return View::make('brochures')->with('brochures', $brochures);
    }

     function brochuresEN($lang="en")
    {
        $brochures = brochure::where('locale', Lang::getLocale())->get();
        return View::make('brochures')->with('brochures', $brochures);
    }


    function videos($lang="tr")
    {
        $videos = videolar::where("durum", 1)->where('locale', Lang::getLocale())->get();
        return View::make('videos')->with('videos', $videos);

    }

    function video_link($lang="tr", $slug)
    {

        $slug = Lang::get('home.video-link');

        $videos = videolar::where("durum", 1)->where('locale', Lang::getLocale())->get();
        return View::make('videos')->with('videos', $videos);

    }

    function menus()
    {

        $results = DB::select('select * from menu_items where locale = :locale', ['locale' => Lang::getLocale()]);
        echo $results;
    }


    function category_ag($lang="tr", $id)
    {

        $category_ag = blog::where("category_id", $id)->get();
        return View::make('blog')->with('category_ag', $category_ag);

    }

    function blog_islem()
    {

        return view::make('blogs');
    }

    function blog_categories($slug, $id)
    {


        $blog = category::where("slug", $slug)->where('id', $id)->get();
        return View::make('blog-categories')->with('blog_categories', $blog);
    }


    function blog_detail($slug)
    {
        $blog_detail = blog::where("slug", $slug)->where('locale', Lang::getLocale())->get();

        if (count($blog_detail)) {

            return View::make('blog_detail')->with('blog_detail', $blog_detail);

        } else {
            //return View::make('errors/404');
            //return $this->errorCode404();
            abort(404);
        }
    }


        function blog_detailtr($lang="tr", $slug)
    {
        $blog_detail = blog::where("slug", $slug)->where('locale', Lang::getLocale())->get();

        if (count($blog_detail)) {

            return View::make('blog_detail')->with('blog_detail', $blog_detail);

        } else {
            //return View::make('errors/404');
            //return $this->errorCode404();
            abort(404);
        }
    }


    function blog_detailen($lang="en", $slug)
    {
        $blog_detail = blog::where("slug", $slug)->where('locale', Lang::getLocale())->get();

        if (count($blog_detail)) {

            return View::make('blog_detail')->with('blog_detail', $blog_detail);

        } else {
            //return View::make('errors/404');
            //return $this->errorCode404();
            abort(404);
        }
    }

    function blog_categories_assets()
    {

        $blog_categories_ag = blog::where("category_id", "3")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);
    }


    function blog_categories_award()
    {

        $blog_categories_ag = blog::where("category_id", "4")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);
    }

    function blog_categories_cyber_security()
    {

        $blog_categories_ag = blog::where("category_id", "5")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);
    }

    function blog_categories_dcs()
    {

        $blog_categories_ag = blog::where("category_id", "6")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);
    }



    function blog_categories_endustri_4()
    {
        $blog_categories_ag = blog::where("category_id", "8")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

    }


    function blog_categories_endustriyel_kontrol_sistemleri()
    {
        $blog_categories_ag = blog::where("category_id", "9")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

    }


    function blog_categories_firewall()
    {
        $blog_categories_ag = blog::where("category_id", "10")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

    }



    function blog_categories_ics()
    {
        $blog_categories_ag = blog::where("category_id", "12")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

    }


    function blog_categories_industry_4()
    {
        $blog_categories_ag = blog::where("category_id", "13")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);
    }


    function blog_categories_internet_of_things()
    {

        $blog_categories_ag = blog::where("category_id", "14")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);
    }

    function blog_categories_kontrolmatik()
    {

        $blog_categories_ag = blog::where("category_id", "15")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);
    }

    function blog_categories_mobile_substation()
    {
        $blog_categories_ag = blog::where("category_id", "16")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);
    }



    function blog_categories_network()
    {
        $blog_categories_ag = blog::where("category_id", "18")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

    }

    function blog_categories_odul()
    {
        $blog_categories_ag = blog::where("category_id", "19")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);
    }

    function blog_categories_otomasyon()
    {
        $blog_categories_ag = blog::where("category_id", "20")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

    }


    function blog_categories_partnership()
    {
        $blog_categories_ag = blog::where("category_id", "21")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);
    }

    function blog_categories_projeler()
    {
        $blog_categories_ag = blog::where("category_id", "22")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);
    }

    function blog_categories_scada()
    {
        $blog_categories_ag = blog::where("category_id", "23")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);
    }



    function blog_categories_technologies()
    {
        $blog_categories_ag = blog::where("category_id", "25")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);
    }

    function blog_categories_training()
    {
        $blog_categories_ag = blog::where("category_id", "26")->orderBy('created_at', 'desc')->get();
        return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

    }

   function blog_categories_varlik_yonetimi(){
    $blog_categories_ag =  blog::where("category_id","28")->orderBy('created_at', 'desc')->get();
    return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);
     }

function blog_categories_siber_guvenlik(){
 $blog_categories_ag =  blog::where("category_id","30")->orderBy('created_at', 'desc')->get();
    return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

}

function blog_categories_dcs_tr(){
 $blog_categories_ag =  blog::where("category_id","31")->orderBy('created_at', 'desc')->get();
    return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

}

function blog_categories_guvenlik_duvari(){
 $blog_categories_ag =  blog::where("category_id","32")->orderBy('created_at', 'desc')->get();
    return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

}

function blog_categories_ics_tr(){
 $blog_categories_ag =  blog::where("category_id","33")->orderBy('created_at', 'desc')->get();
    return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

}

function blog_categories_nesnelerin_interneti(){

 $blog_categories_ag =  blog::where("category_id","35")->orderBy('created_at', 'desc')->get();
    return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

}

function blog_categories_kontrolmatik_tr(){

 $blog_categories_ag =  blog::where("category_id","36")->orderBy('created_at', 'desc')->get();
    return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

}

function blog_categories_mobil_trafo_merkezi(){

 $blog_categories_ag =  blog::where("category_id","37")->orderBy('created_at', 'desc')->get();
    return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

}

function blog_categories_ag(){

 $blog_categories_ag =  blog::where("category_id","38")->orderBy('created_at', 'desc')->get();
    return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

}
function blog_categories_endustriyel_otomasyon(){

 $blog_categories_ag =  blog::where("category_id","39")->orderBy('created_at', 'desc')->get();
    return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

}

function blog_categories_ortaklik(){

 $blog_categories_ag =  blog::where("category_id","45")->orderBy('created_at', 'desc')->get();
    return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

}


function blog_categories_scada_tr(){

 $blog_categories_ag =  blog::where("category_id","41")->orderBy('created_at', 'desc')->get();
    return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

}

function blog_categories_teknoloji(){

 $blog_categories_ag =  blog::where("category_id","42")->orderBy('created_at', 'desc')->get();
    return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

}

function blog_categories_egitim(){

 $blog_categories_ag =  blog::where("category_id","43")->orderBy('created_at', 'desc')->get();
    return View::make('blog-categories')->with('blog_categories', $blog_categories_ag);

}



    function errorCode404()
    {
        $data['title'] = '404';
        $data['name'] = 'Page not found';
        return response()
            ->view('errors.404', $data, 404)->setStatusCode(404);
    }




}
