<?php

namespace App\Http\Middleware;

use Closure;

class ValidateUserAgent
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


         $ip = $request->ip();
         if($ip == '127.0.0.1'){
             return $next($request);
         }
         else{
             return redirect('/');
         }
    }
}
//var_dump($post);
//return $next($request);
