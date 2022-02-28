<?php

namespace app\core;

/**
 * Class View
 * 
 * @author Anthony HUYNH <anthonyhuynh1204@gmail.com>
 * @package app\core
 */

class View
{
    public string $title = '';

    
    public function renderView($view, $params = [])
    {
        $viewContent = $this->renderOnlyViews($view, $params);
        $layoutContent = $this->layoutContent();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function renderContent($viewContent)
    {
        $layoutContent = $this->layoutContent();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function layoutContent()
    {
        $layout = Application::$app->layout;
        if (Application::$app->controller) {
        $layout = Application::$app->controller->layout;
        }
        ob_start();
        include_once Application::$ROOT_DIR."/views/layouts/$layout.php";
        return ob_get_clean();
    }

    protected function renderOnlyViews($view, $params = [])
    {
        extract($params);
        ob_start();
        include_once Application::$ROOT_DIR."/views/$view.php";
        return ob_get_clean();
    }
}