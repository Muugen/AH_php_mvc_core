<?php

namespace anthonyhuynh\PhpMvcFramework\form;

use anthonyhuynh\PhpMvcFramework\Model;

/**
 * Class BaseField
 * 
 * @author Anthony HUYNH <anthonyhuynh1204@gmail.com>
 * @package anthonyhuynh\PhpMvcFramework\form
 */


abstract class BaseField
{
    public Model $model;
    public string $attribute;

    /**
     * BaseField contrustor
     * @param Model $model
     * @param string $attribute
     */

    public function __construct(model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    abstract public function renderInput(): string;

    public function __toString()
    {
        return sprintf('
            <div class="col mb-3">
                <label class="form-label">%s</label>
                %s
                <div class="invalid-feedback">
                    %s
                </div>
            </div>
        ',
            $this->model->getLabel($this->attribute),
            $this->renderInput(),
            $this->model->getFirstError($this->attribute),
        );
    }
}