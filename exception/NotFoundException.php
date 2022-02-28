<?php

namespace app\core\exception;

/**
 * Class NotFoundException
 * 
 * @author Anthony HUYNH <anthonyhuynh1204@gmail.com>
 * @package app\core\exception
 */

class NotFoundException extends \Exception
{
    protected $message = 'La page que vous recherchez est introuvable.';
    protected $code = 404;
}