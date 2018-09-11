<?php

namespace Tests;

use App\Canvasback;
use PHPUnit\Framework\TestCase;

/**
 * Class MallardTest
 * @package Tests
 */
class CanvasbackTest extends TestCase {

    /** @var Canvasback $canvasback */
    protected $canvasback;

    /**
     * Setup
     */
    protected function setUp()
    {
        $this->canvasback = new Canvasback();
    }

    /**
     * @test
     */
    public function it_can_replicate()
    {
        static::assertSame(Canvasback::class, $this->canvasback->replicate());
    }

    /**
     * @test
     */
    public function it_can_quack()
    {
        static::assertSame('quack', $this->canvasback->quack());
    }

    /**
     * @test
     */
    public function it_can_fly()
    {
        static::assertSame('fly', $this->canvasback->fly());
    }

    /**
     * @test
     */
    public function it_can_swim()
    {
        static::assertSame('swim slowly', $this->canvasback->swim());
    }
}