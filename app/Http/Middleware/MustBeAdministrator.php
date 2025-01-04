<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import the Auth facade
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class MustBeAdministrator
{
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('Middleware executed for user: ' . optional(Auth::user())->username);

        if (Auth::user()?->username !== 'Rambo') {
            abort(Response::HTTP_FORBIDDEN, 'Access denied. You must be an administrator.');
        }

        return $next($request);
    }
}
