<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Permission
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next, $role): Response
  {
    if ($role == 'admin' && Auth::check() && Auth::user()->role == 'admin'){
      return $next($request);
    }
    elseif ($role == 'masyarakat' && Auth::check() && Auth::user()->role == 'masyarakat'){
      return $next($request);
    }
    return redirect('/login');
  }
}
