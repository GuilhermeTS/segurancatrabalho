<?php

namespace treinamento\Http\Middleware;

use Closure;
use Auth;

class NivelAcesso
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
        $user = Auth::user();
        if($user->can('admin')){
        return $next($request);
        } else {
            return redirect('/');
        }
    }
}
