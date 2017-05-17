<?php


namespace App\Http\Middleware;

use Closure;

class VerifyAge
{/**
 * Handle an incoming request.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \Closure  $next
 * @param  $request $next $guard
 * @return mixed
 */
    public function handle($request, Closure $next, $quard = null)
    {

        if (auth()->user()->age > 18)
            return $next($request);

        abort(403, 'access denied');

    }

}