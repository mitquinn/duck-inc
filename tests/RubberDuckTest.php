<?php

namespace Tests;

use App\RubberDuck;
use PHPUnit\Framework\TestCase;

/**
 * Class RubberDuckTest
 * @package Tests
 */
class RubberDuckTest extends TestCase
{

    /** @var RubberDuck $rubberDuck */
    protected $rubberDuck;

    /**
     * Setup
     */
    protected function setUp()
    {
        $this->rubberDuck = new RubberDuck();
    }

    /**
     * @test
     */
    public function it_can_replicate(): void
    {
        static::assertInstanceOf(RubberDuck::class, $this->rubberDuck->replicate());
    }

    /**
     * @test
     */
    public function it_can_quack(): void
    {
        static::assertSame('quack', $this->rubberDuck->quack());
    }

    /**
     * @test
     */
    public function it_can_swim(): void
    {
        static::assertSame('swim', $this->rubberDuck->swim());
    }

    /**
     * @test
     */
    public function it_can_listen(): void
    {
        static::assertSame('listen', $this->rubberDuck->listen());
    }

    /**
     * @test
     */
    public function it_cannot_fly(): void
    {
        static::assertFalse(method_exists($this->rubberDuck, 'fly'));
    }
}