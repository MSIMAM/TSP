<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        $email      = $request->email;
        $password   = $request->password;
        foreach ($guards as $guard) {
            if (Auth::attempt(['email' => $email, 'password' => $password, 'status'=>'Active'])) {
                toast('Welcome '.Auth::user()->name.'', 'success');
                return redirect(RouteServiceProvider::HOME);
            }

        }

        return $next($request);
    }
}
