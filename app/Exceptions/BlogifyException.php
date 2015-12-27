<?php

namespace App\Exceptions;

use Exception;

class BlogifyException extends Exception
{
    public function __construct()
    {
        parent::__construct();
    }
}
