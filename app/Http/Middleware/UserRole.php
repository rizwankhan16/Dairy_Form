<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role): Response
    {
        if (!Auth::check()) {
        return redirect()->route('login');
       }
       $userRole=Auth::user()->role;
       switch ($role) {
        case 'admin':
            if($userRole==0)
            return $next($request);
            break;
            case 'seller':
                if($userRole==1)
                return $next($request);
                break;
                case 'user':
                    if($userRole==2)
                    return $next($request);
                    break;
       }
       switch($userRole)
       {
       case 0:
        return redirect()->route('admin');
        case 1:
            return redirect()->route('seller');
            case 2:
                return redirect()->route('user');
            }
            return redirect()->route('login');
    }
}
