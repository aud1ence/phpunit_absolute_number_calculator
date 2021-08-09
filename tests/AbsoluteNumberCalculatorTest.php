<?php

use PHPUnit\Framework\TestCase;
require __DIR__."/../src/AbsoluteNumberCalculator.php";

class AbsoluteNumberCalculatorTest extends TestCase
{
    public function test_find_absolute_0()
    {
        $number = 0;
        $expected = 0;
        $absolute = new AbsoluteNumberCalculator();
        $result = $absolute->findAbsolute($number);
        $this->assertEquals($expected, $result);
    }

    public function test_find_absolute_1()
    {
        $number = 1;
        $expected = 1;

        $absolute = new AbsoluteNumberCalculator();
        $result = $absolute->findAbsolute($number);
        $this->assertEquals($expected, $result);
    }

    public function test_find_absolute_negative_1()
    {
        $number = -1;
        $expected = 1;

        $absolute = new AbsoluteNumberCalculator();
        $result = $absolute->findAbsolute($number);
        $this->assertEquals($expected, $result);
    }
}
