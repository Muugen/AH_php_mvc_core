<?php

namespace app\core\middlewares;

/**
 * Class BaseMiddleware
 * 
 * @author Anthony HUYNH <anthonyhuynh1204@gmail.com>
 * @package app\core\middlewares
 */

abstract class BaseMiddleware
{
    abstract public function execute();
}