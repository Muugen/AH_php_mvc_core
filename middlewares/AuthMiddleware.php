<?php

namespace anthonyhuynh\PhpMvcFramework\middlewares;

use anthonyhuynh\PhpMvcFramework\Application;
use anthonyhuynh\PhpMvcFramework\exception\ForbiddenException;

/**
 * Class AuthMiddleware
 * 
 * @author Anthony HUYNH <anthonyhuynh1204@gmail.com>
 * @package anthonyhuynh\PhpMvcFramework\middlewares
 */

class AuthMiddleware extends BaseMiddleware
{
    public array $actions = [];

    /**
     *  AuthMiddleware constructor
     * 
     * @param array $actions
     */

    public function __construct($actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}