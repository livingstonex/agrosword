<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;

class isAdmin
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
        throw_if(
            ! auth()->user()->isAdmin(),
            AuthorizationException::class,
            'You are not allowed to access this page'
        );
        return $next($request);
    }
}
