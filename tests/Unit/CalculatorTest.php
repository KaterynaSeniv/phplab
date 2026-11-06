<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\Calculator;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->calculator = new Calculator();
    }

    public function test_add_numbers(): void
    {
        $result = $this->calculator->add(2.5, 3.5);
        $this->assertEquals(6.0, $result);
    }

    public function test_subtract_numbers(): void
    {
        $result = $this->calculator->subtract(10.0, 4.0);
        $this->assertEquals(6.0, $result);
    }
}
