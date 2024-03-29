<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (\Session::has('locale')) {
            $locale=\Session::get('locale');
        }else{
            $locale="uz";
        }

        \App::setLocale($locale);
        return $next($request);

    }
}
