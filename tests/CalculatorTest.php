<?php
declare(strict_types=1);

namespace theoAlex\Calculator;

use PHPUnit\Framework\TestCase;
use theoAlex\Calculator\Calculator;
use PHPUnit\Framework\Error\Error;

final class CalculatorTest extends TestCase
{
    protected $myCalc;

    protected function setup(): void
    {
        $this->myCalc = new Calculator();
    }

    public function testCalculatesSumFromTwoNrs(): void
    {
        $this->assertSame(2, $this->myCalc->calculateSum(1, 1));
        $this->assertSame(3, $this->myCalc->calculateSum(1, 2));
    }
    
    public function testCalculatesSumFromAVariableAmountOfNrs(): void
    {
        $this->assertSame(3, $this->myCalc->calculateSum(1, 1, 1));
        $this->assertSame(21, $this->myCalc->calculateSum(1, 2, 3, 4, 5, 6));
    }

    public function testAcceptsOnlyNrsAsArgumentTypes(): void
    {
        $this->assertSame(2.2, $this->myCalc->calculateSum(1, 1.2));
        $this->expectException(\InvalidArgumentException::class);
        $this->myCalc->calculateSum('1', true, [1, 2], $this->myCalc, null);
    }
}
