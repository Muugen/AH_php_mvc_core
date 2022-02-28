<?php

namespace anthonyhuynh\PhpMvcFramework;

use anthonyhuynh\PhpMvcFramework\db\DbModel;

/**
 * Class UserModel
 * 
 * @author Anthony HUYNH <anthonyhuynh1204@gmail.com>
 * @package anthonyhuynh\PhpMvcFramework
 */

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}