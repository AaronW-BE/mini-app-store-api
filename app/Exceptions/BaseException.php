<?php


namespace App\Exceptions;


use mysql_xdevapi\Exception;
use Throwable;

class BaseException extends \Exception
{
    /**
     * @throws \Exception Exception
     */
    public function __construct($errorCode)
    {
        if (is_array($errorCode) && count($errorCode) === 2) {
            $code = $errorCode[0];
            $message = $errorCode[1];
            $previous = null;
            parent::__construct($message, $code, $previous);
            return;
        }
        throw new \Exception("Param error for base exception");
    }
}
