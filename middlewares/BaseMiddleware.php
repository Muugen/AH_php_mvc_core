<?php

namespace anthonyhuynh\PhpMvcFramework\middlewares;

/**
 * Class BaseMiddleware
 * 
 * @author Anthony HUYNH <anthonyhuynh1204@gmail.com>
 * @package anthonyhuynh\PhpMvcFramework\middlewares
 */

abstract class BaseMiddleware
{
    abstract public function execute();
}