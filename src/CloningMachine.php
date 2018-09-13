<?php

namespace App;

/**
 * Class CloningMachine
 * @package App
 */
class CloningMachine
{
    public function make($class)
    {
        return $class->replicate();
    }
}