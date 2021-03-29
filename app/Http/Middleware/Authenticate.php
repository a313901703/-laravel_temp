<?php

namespace App\Http\Middleware;

use App\Models\UserToken;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use App\Exceptions\UnauthorizedException;
use Closure;
use Illuminate\Support\Arr;

class Authenticate extends Middleware
{

    public function handle($request, Closure $next, ...$guards)
    {
        $this->authenticate($request, $guards);

        return $next($request);
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    /**
     * Handle an unauthenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array  $guards
     * @return void
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    protected function unauthenticated($request, array $guards)
    {
        // throw new AuthenticationException(
        //     'Unauthenticated.', $guards, $this->redirectTo($request)
        // );
        throw new UnauthorizedException('Token does not exist or token is expired.');
    }

}
