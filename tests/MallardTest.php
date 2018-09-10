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
    public function it_can_quack()
    {
        $this->assertSame('quack', $this->mallard->quack());
    }

    /**
     * @test
     */
    public function it_can_fly()
    {
        $this->assertSame('fly', $this->mallard->fly());
    }

    /**
     * @test
     */
    public function it_can_swim()
    {
        $this->assertSame('swim', $this->mallard->swim());
    }
}