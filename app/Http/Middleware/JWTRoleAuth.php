<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class JWTRoleAuth extends BaseMiddleware
{
    /**
     * JWT analyse the current role/platform logged in .
     * @param $request
     * @param Closure $next
     * @param null $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role = null)
    {
        try {
            // analyse the role of the token
            $tokenRole = $this->auth->parseToken()->getClaim('role');
        } catch (JWTException $e) {
            /**
             * token analysis failed，means there is not available token.
             * In order to be used globally (requests that do not require a token can also be passed),
             * let the request continue.
             */
            return $next($request);
        }
        if ($tokenRole != $role) {
            throw new UnauthorizedHttpException('jwt-auth', 'User role error');
        }
        return $next($request);

    }
}
