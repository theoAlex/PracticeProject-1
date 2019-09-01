<?php
declare(strict_types=1);

namespace theoAlex\Calculator;

use PHPUnit\Framework\TestCase;
use theoAlex\Calculator\Calculator;
use PHPUnit\Framework\Error\Error;

final class CalculatorTest extends TestCase
{
    
    public function testCalculatesSumFromTwoNrs(): void
    {
        $myCalc = new Calculator();
        $this->assertSame(2, $myCalc->calculateSum(1, 1));
        $this->assertSame(3, $myCalc->calculateSum(1, 2));
    }
    
    public function testCalculatesSumFromAVariableAmountOfNrs(): void
    {
        $myCalc = new Calculator();
        $this->assertSame(3, $myCalc->calculateSum(1, 1, 1));
        $this->assertSame(21, $myCalc->calculateSum(1, 2, 3, 4, 5, 6));
    }

    public function testAcceptsOnlyNrsAsArgumentTypes(): void
    {
        $myCalc = new Calculator();
        $this->assertSame(2.2, $myCalc->calculateSum(1, 1.2));
        $this->expectException(\InvalidArgumentException::class);
        $myCalc->calculateSum('1', true, [1, 2], $myCalc, null);
    }
}
