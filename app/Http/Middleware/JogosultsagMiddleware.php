<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class JogosultsagMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $szint): Response
    {
        //error_log("asdasdasd");
        //dd("asdasdasdsd");
        $user = auth('sanctum')->user();
        if ($user != null) {
            if ($user->guard == "admin" && 
                ($szint == "admin" ||
                $szint == "secretary" ||
                $szint == "guest")) {
                return $next($request);
            }
            if ($user->guard == "secretary" && 
                ($szint == "secretary" ||
                $szint == "guest")) {
                return $next($request);
            }
            if ($user->guard == "guest" && 
                ($szint == "guest")) {
                return $next($request);
            }
        }
        return response("Nincs jogosultságod", 503);
    }
}
