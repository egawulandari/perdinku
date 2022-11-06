<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class SDM
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 'Pegawai') {
            abort(401);
        }

        if (Auth::user()->role == 'Admin') {
            abort(401);
        }

        if (Auth::user()->role == 'DIVISI-SDM') {
            return $next($request);
        }
    }
}
