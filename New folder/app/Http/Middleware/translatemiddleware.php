<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\App;

use Closure;
use Illuminate\Http\Request;

class translatemiddleware
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
		$avilablelocale =['bn', 'en' ];
		$locale=session('session_key');
		$locale = in_array($locale, $avilablelocale) ? $locale: config('app.locale');
		app()->setlocale($locale);
        return $next($request);
    }
}
