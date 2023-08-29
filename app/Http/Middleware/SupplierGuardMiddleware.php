<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SupplierGuardMiddleware
{
    public function handle($request, Closure $next)
    {
      
        // Check if user is authenticated with admin guard
        if (!Auth::guard('supplier')->check()) {
            // User is not authenticated as admin, redirect to admin login
            return redirect()->route('supplier.login');
        }

        // User is authenticated as admin, allow access to the route
        return $next($request);
    }
}