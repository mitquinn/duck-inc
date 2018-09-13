<?php

namespace App;

/**
 * Class CloningMachine
 * @package App
 */
class CloningMachine
{
    /**
     * @param $object
     * @return mixed
     */
    public function make($object)
    {
        if (is_a($object, Mallard::class) || is_a($object, Canvasback::class)) {
            $object->quack();
            $object->swim();
            $object->fly();
        } else {
            $object->quack();
            $object->swim();
            $object->listen();
        }

        return $object->replicate();
    }
}