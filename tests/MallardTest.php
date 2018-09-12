<?php

namespace Tests;

use App\Mallard;
use PHPUnit\Framework\TestCase;

/**
 * Class MallardTest
 * @package Tests
 */
class MallardTest extends TestCase {

    /** @var Mallard $mallard */
    protected $mallard;

    /**
     * Setup
     */
    protected function setUp()
    {
        $this->mallard = new Mallard();
    }

    /**
     * @test
     */
    public function it_can_replicate(): void
    {
        static::assertInstanceOf(Mallard::class, $this->mallard->replicate());
    }

    /**
     * @test
     */
    public function it_can_quack(): void
    {
        static::assertSame('quack', $this->mallard->quack());
    }

    /**
     * @test
     */
    public function it_can_fly(): void
    {
        static::assertSame('fly', $this->mallard->fly());
    }

    /**
     * @test
     */
    public function it_can_swim(): void
    {
        static::assertSame('swim', $this->mallard->swim());
    }

    /**
     * @test
     */
    public function it_cannot_listen(): void
    {
        static::assertFalse(method_exists($this->mallard, 'listen'));
    }
}