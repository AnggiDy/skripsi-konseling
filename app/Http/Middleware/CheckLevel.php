<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckLevel
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
        if(Auth::user()->role != 'konselor'){
            return redirect()->back()->with('warning', 'Tidak memiliki wewenang untuk mengakses halaman tersebut!');
        }
        return $next($request);
    }
}
