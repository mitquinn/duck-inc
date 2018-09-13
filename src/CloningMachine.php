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
        if (is_a($class, Mallard::class) || is_a($class, Canvasback::class)) {
            $class->quack();
            $class->swim();
            $class->fly();
        } else {
            $class->quack();
            $class->swim();
            $class->listen();
        }

        return $class->replicate();
    }
}