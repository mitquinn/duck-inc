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
    public function it_can_make_a_mallard(): void
    {
        /** @var Mallard $mallard */
        $mallard = $this->cloningMachine->make(new Mallard());

        static::assertSame('quack', $mallard->quack());
        static::assertSame('swim', $mallard->swim());
        static::assertSame('fly', $mallard->fly());
        static::assertInstanceOf(Mallard::class, $mallard->replicate());
        static::assertFalse(method_exists($mallard, 'listen'));
    }

    /**
     * @test
     */
    public function it_can_make_a_canvasback(): void
    {
        /** @var Canvasback $canvasback */
        $canvasback = $this->cloningMachine->make(new Canvasback());

        static::assertSame('quack', $canvasback->quack());
        static::assertSame('swim slowly', $canvasback->swim());
        static::assertSame('fly', $canvasback->fly());
        static::assertInstanceOf(Canvasback::class, $canvasback->replicate());
        static::assertFalse(method_exists($canvasback, 'listen'));
    }

    /**
     * @test
     */
    public function it_can_make_a_rubberduck(): void
    {
        /** @var RubberDuck $rubberDuck */
        $rubberDuck = $this->cloningMachine->make(new RubberDuck());

        static::assertSame('quack', $rubberDuck->quack());
        static::assertSame('swim', $rubberDuck->swim());
        static::assertSame('listen', $rubberDuck->listen());
        static::assertInstanceOf(RubberDuck::class, $rubberDuck->replicate());
        static::assertFalse(method_exists($rubberDuck, 'fly'));
    }
    
}