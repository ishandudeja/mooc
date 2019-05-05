<?php

namespace mooc\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        if (! $request->user()->hasRole($role)) {
           // abort(401, 'This action is unauthorized.');
            return redirect('');
        }
        return $next($request);
        //return $next($request);
    }
}
