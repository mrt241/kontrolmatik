<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Config;
use App;

class Lang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

      /* if($lang = Session::get('lang')){

        \Lang::setLocale($lang);
       }*/
        //App::setLocale("tr");
       //$locale=Session::get('lang',Config::get('app.locale'));
       //App::setLocale($locale);
       //Session::put('lang',$locale);
       //return redirect(url(URL::previous()));
       return $next($request);
    }
}
