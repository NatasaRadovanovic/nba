<?php

namespace App\Http\Middleware;

use Closure;

class CheckComment
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
        if (str_contains(request('content'), ['stupid', 'idiot','hate']))
        {
            return response(view('teams.forbidden-comment'));
        }
        return $next($request);
    }
}
