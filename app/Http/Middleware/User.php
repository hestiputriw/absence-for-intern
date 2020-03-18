<?php

namespace App\Http\Middleware;

use Closure;

class User
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
        if (auth()->check()) {
            if (auth()->user()->role == 'user') {
                return $next($request);
            } else {
                return abort(403, 'Unauthorized action.');
            }
        } else {
            return redirect('/');
        }
    }
}
