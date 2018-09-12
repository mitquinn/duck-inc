<?php

namespace Tests;

use App\Canvasback;
use PHPUnit\Framework\TestCase;

/**
 * Class CanvasbackTest
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
    public function it_can_replicate(): void
    {
        static::assertInstanceOf(Canvasback::class, $this->canvasback->replicate());
    }

    /**
     * @test
     */
    public function it_can_quack(): void
    {
        static::assertSame('quack', $this->canvasback->quack());
    }

    /**
     * @test
     */
    public function it_can_fly(): void
    {
        static::assertSame('fly', $this->canvasback->fly());
    }

    /**
     * @test
     */
    public function it_can_swim(): void
    {
        static::assertSame('swim slowly', $this->canvasback->swim());
    }

    /**
     * @test
     */
    public function it_cannot_listen(): void
    {
        static::assertFalse(method_exists($this->canvasback, 'listen'));
    }
}