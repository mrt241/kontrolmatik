<?php

namespace App\Http\Controllers;
use App\Videolar;
use App\Reference;
use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
//use Session;
use Redirect;
use Lang;
use URL;
use App;


class LangController extends Controller
{
    public function index($lang){

        
        $langs = ['en','fr','ar','tr'];

        if(in_array($lang,$langs)){

           session::put('lang',$lang);



            return view('anasayfa'.$lang);


          // session::set('lang',$lang);
          // echo session(['lang' => $lang]);
          // App::setLocale($lang);
          //  echo session('lang');
          //  return redirect::back()->with('lang_msg','Dil Değiştirildi');

        }

        else {
            //return View::make('errors/404');
			abort(404);
        }

    }




}
