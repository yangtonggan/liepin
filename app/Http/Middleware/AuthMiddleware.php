<?php

namespace App\Http\Middleware;

use Closure;

class AuthMiddleware
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
        //判断是否没有登陆
        if(empty(session("adminuser"))){
            //跳转到登陆
            return redirect('/admin/login');
        }
        return $next($request);
    }
}
