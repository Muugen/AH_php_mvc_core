<?php

namespace anthonyhuynh\PhpMvcFramework\exception;

/**
 * Class NotFoundException
 * 
 * @author Anthony HUYNH <anthonyhuynh1204@gmail.com>
 * @package anthonyhuynh\PhpMvcFramework\exception
 */

class NotFoundException extends \Exception
{
    protected $message = 'La page que vous recherchez est introuvable.';
    protected $code = 404;
}