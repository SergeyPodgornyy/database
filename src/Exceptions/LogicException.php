<?php

namespace League\Database\Exceptions;

use Exception;
use Throwable;

class LogicException extends Exception
{
    public function __construct($message, $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
