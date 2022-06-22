<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
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
        $this->change_lang($request->segment(1));
        return $next($request);
    }

    public function change_lang($lang){
        if(in_array($lang,['en','tr','fr','ar'])){
            session(['locale'=> $lang]);
        }
        else{
            session(['locale'=> Config::get('app.locale')]);
        }
        app()->setLocale(session('locale'));
        //Config::set('app.locale_prefix', session('locale'));
        //return back();
    }
}
