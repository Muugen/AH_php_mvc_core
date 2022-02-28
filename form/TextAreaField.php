<?php

namespace app\core\form;

/**
 * Class TextAreaField
 * 
 * @author Anthony HUYNH <anthonyhuynh1204@gmail.com>
 * @package app\core\form
 */

class TextAreaField extends BaseField
{
    public function renderInput(): string
    {
        return sprintf('<textarea name="%s" class="form-control%s">%s</textarea>', 
            $this->attribute,
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->model->{$this->attribute}
        );
    }
}