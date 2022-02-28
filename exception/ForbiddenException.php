<?php

namespace app\core\exception;

/**
 * Class ForbiddenException
 * 
 * @author Anthony HUYNH <anthonyhuynh1204@gmail.com>
 * @package app\core\exception
 */

class ForbiddenException extends \Exception
{
    protected $message = 'Vous n\'avez pas la permission d\'accéder à cette page.';
    protected $code = 403;
}