<?php

namespace App\Http\Middleware;

use Closure;

class Locale
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
        if(session()->has('app_locale') AND array_key_exists(session()->get('app_locale'), config()->get('locales'))) {
            app()->setLocale(session()->get('app_locale'));
        } else {
            app()->setLocale(config()->get('app.fallback_locale'));
        }
        return $next($request);
    }
}
