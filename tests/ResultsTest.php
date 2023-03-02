<?php

use PHPUnit\Framework\TestCase;
use src\Exercise;

class ResultsTest extends TestCase
{
    private Exercise $exercise;

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->exercise = new Exercise();
    }

    public function testExample1()
    {
        $this->assertEquals(12339, $this->exercise->findMaxK(7, 5, 12345));
    }

    public function testExample2()
    {
        $this->assertEquals(0, $this->exercise->findMaxK(5, 0, 4));
    }

    public function testExample3()
    {
        $this->assertEquals(15, $this->exercise->findMaxK(10, 5, 15));
    }

    public function testExample4()
    {
        $this->assertEquals(54306, $this->exercise->findMaxK(17, 8, 54321));
    }

    public function testExample5()
    {
        $this->assertEquals(999999995, $this->exercise->findMaxK(499999993, 9, 1000000000));
    }

    public function testExample6()
    {
        $this->assertEquals(185, $this->exercise->findMaxK(10, 5, 187));
    }

    public function testExample7()
    {
        $this->assertEquals(999999998, $this->exercise->findMaxK(2, 0, 999999999));
    }
}