<?php

namespace App\Http\Middleware;

use Closure;
use illuminate\Contracts\Auth\Guard;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::user()->level == 'petugas'){
            if (Auth::user()->petugas[0]->level=='admin'){
                return $next($request);
            }else{
                abort(403);
            }
        }else{
            abort(403);
        }
    }
}
