<?php

namespace Tests;

use App\Mallard;
use App\Canvasback;
use App\RubberDuck;
use App\CloningMachine;
use PHPUnit\Framework\TestCase;

/**
 * Class CloningMachineTest
 * @package Tests
 */
class CloningMachineTest extends TestCase
{

    /** @var CloningMachine $cloningMachine */
    protected $cloningMachine;

    /**
     * Setup
     */
    protected function setUp()
    {
        $this->cloningMachine = new CloningMachine();
    }


    /**
     * @test
     */
    public function it_can_make_a_mallard()
    {
        /** @var Mallard $mallard */
        $mallard = $this->cloningMachine->makeDuck(new Mallard());

        static::assertSame('quack', $mallard->quack());
        static::assertSame('swim', $mallard->swim());
        static::assertSame('fly', $mallard->fly());
        static::assertInstanceOf(Mallard::class, $mallard->replicate());
        static::assertFalse(method_exists($mallard, 'listen'));
    }

    /**
     * @test
     */
    public function it_can_make_a_canvasback()
    {
        /** @var Canvasback $canvasback */
        $canvasback = $this->cloningMachine->makeDuck(new Canvasback());

        static::assertSame('quack', $canvasback->quack());
        static::assertSame('swim slowly', $canvasback->swim());
        static::assertSame('fly', $canvasback->fly());
        static::assertInstanceOf(Canvasback::class, $canvasback->replicate());
        static::assertFalse(method_exists($canvasback, 'listen'));
    }

    /**
     * @test
     */
    public function it_can_make_a_rubberduck()
    {
        /** @var RubberDuck $rubberDuck */
        $rubberDuck = $this->cloningMachine->makeDuck(new RubberDuck());

        static::assertSame('quack', $rubberDuck->quack());
        static::assertSame('swim', $rubberDuck->swim());
        static::assertSame('listen', $rubberDuck->listen());
        static::assertInstanceOf(RubberDuck::class, $rubberDuck->replicate());
        static::assertFalse(method_exists($rubberDuck, 'fly'));
    }
    
}