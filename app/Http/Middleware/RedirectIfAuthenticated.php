<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {

        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $role = Auth::user()->role;
                if ($role == 'sdm') {
                    return redirect('/usrsdm');
                } else if ($role == 'tpb') {
                    return redirect('/usrtpb');
                } else if ($role == 'umum') {
                    return redirect('/usrumum');
                } else if ($role == 'pbau') {
                    return redirect('/usrpbau');
                } else if ($role == 'it') {
                    return redirect('/usrit');
                } else if ($role == 'keuangan') {
                    return redirect('/usrkeuangan');
                } else if ($role == 'pelkap') {
                    return redirect('/usrpelkap');
                } else if ($role == 'manager') {
                    return redirect('/divisi');
                } else if ($role == 'asistenmanager') {
                    return redirect('/divisi');
                }
            }
        }

        return $next($request);
    }
}
