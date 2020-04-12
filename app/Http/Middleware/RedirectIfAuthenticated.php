<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
           // return redirect(RouteServiceProvider::HOME);

           /*si un utilisateur est connecté, on le rediregera directement à la page d'accueil
           * aucune raison de vouloir se connecter quand on est connecté
           */
           return redirect('/');
        }

        return $next($request);
    }
}
