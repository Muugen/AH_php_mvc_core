<?php

namespace anthonyhuynh\PhpMvcFramework;

use anthonyhuynh\PhpMvcFramework\middlewares\BaseMiddleware;

/**
 * Class Controller
 * 
 * @author Anthony HUYNH <anthonyhuynh1204@gmail.com>
 * @package anthonyhuynh\PhpMvcFramework
 */

class Controller
{
    public string $layout = 'main';
    public string $action = '';

    /**
     * @var \anthonyhuynh\PhpMvcFramework\middlewares\BaseMiddleware[]
     */
    protected array $middlewares = [];

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * Get the value of middlewares
     *
     * @return  \anthonyhuynh\PhpMvcFramework\middlewares\BaseMiddleware[]
     */ 
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}