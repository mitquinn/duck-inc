<?php

namespace Tests;

use App\Mallard;
use PHPUnit\Framework\TestCase;

class MallardTest extends TestCase {
    protected $mallard;

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

    /**
     * @test
     */
    public function it_knows_its_color()
    {
        $this->assertSame('black', $this->mallard->color());
    }
}