<?php

namespace anthonyhuynh\PhpMvcFramework\form;

use anthonyhuynh\PhpMvcFramework\Model;

/**
 * Class Form
 * 
 * @author Anthony HUYNH <anthonyhuynh1204@gmail.com>
 * @package anthonyhuynh\PhpMvcFramework\form
 */


class Form
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }
    public static function end()
    {
        echo '</form>';
    }
    public function field(Model $model, $attribute)
    {
        return new InputField($model, $attribute);
    }
}