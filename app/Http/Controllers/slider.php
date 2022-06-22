<?php

namespace App\Http\Controllers;
use App\Captcha;
use App\Videolar;
use App\Reference;
use App\Blog;
use View;
use Illuminate\Http\Request;
use Session;
use Redirect;
use Lang;
use Mail;
use App\Post;



class slider extends Controller
{

  public function index(){


    $slider =  videolar::where('locale',Lang::getLocale())->where('durum','0')->get();

    if(count($slider)){
    	 return View::make('anasayfa')->with('data', $slider);
    }
    else{
		//return View::make('errors/404');
	abort(404);}


    $references =  reference::where( "id")->get();
    return View::make('anasayfa')->with('references', $references);

  }


  public function blogs(){
   
   /*  $blogs = blog::where("featured", '1')->where('locale', Lang::getLocale())->get();
     return View::make('blogs')->with('blogs', $blogs);*/
     $blogs = blog::where('locale', Lang::getLocale())->orderBy('created_at', 'desc')->get();
     return View::make('blogs')->with('blogs', $blogs);
  }
  
 

   


   function mail_fonksiyon(Request $request)
    {

        $this->validate($request, ['form_name' => 'required', 'form_email' => 'required', 'form_phone' => 'required', 'form_message' => 'required', 'g-recaptcha-response' => 'required']);

               

        Mail::send('email',
            array(
                'form_name' => $request->get('form_name'),
                'form_email' => $request->get('form_email'),
                'form_phone' => $request->get('form_phone'),
                'form_message' => $request->get('form_message'),
                'g-recaptcha-response' => 'required|recaptcha'


            ), function ($message) {


                $message->from('kntrlmtk@kontrolmatik.com');
                //$message->cc('info@kontrolmatik.com');
                $message->to('kntrlmtk@kontrolmatik.com', 'Admin')->subject('Kontrolmatik İletişim');

            });

              Session::flash('success','Thanks for it');
            
 
       
           return back()->with('success', 'Thanks for contacting us!');
         
    }



}
