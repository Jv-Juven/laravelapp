<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class AdminAuth
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
        //修改一下auth的默认登录表
		// echo Auth::getFacadeApplication()->config['auth']['table'];
        // return
		Config::set('auth.model', 'App\AdminUser');
		Config::set('auth.table', 'admin_users');
		//dd(Auth::getFacadeApplication()->config['auth']['table']);
		Auth::attempt([
            "name" => $request->input("name"),
            "password" => $request->input("password")
        ]);
 		if(Auth::check()){
			//已经登录
			//dd('s');
			return "登录成功";
            // return $next($request);
		}
		else{
			//还没有登录
			//dd('not login');
			// return redirect()->guest('admin/login');
			return "登录失败";
        }

    }
}
