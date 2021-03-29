<?php

namespace App\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class UnauthorizedException extends HttpException
{
   /**
     * @param string     $message  The internal exception message
     * @param \Throwable $previous The previous exception
     * @param int        $code     The internal exception code
     */
    public function __construct(string $message = null, \Throwable $previous = null, int $code = 401, array $headers = [])
    {
        parent::__construct(401, $message, $previous, $headers, $code);
    }
}
