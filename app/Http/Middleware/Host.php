<?php

namespace App\Http\Middleware;

use Closure;

class Host
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
            if (auth()->user()->role == 'host') {
                return $next($request);
            } else {
                return abort(403, 'Unauthorized action.');
            }
        } else {
            return redirect('/');
        }
    }
}
