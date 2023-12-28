<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $admin = auth(ADMIN)->user();
        if (!$admin || !isset($admin->username)) {
            auth(ADMIN)->logout();
            return redirect()->route('admin.login');
        }
        return $next($request);
    }
}
