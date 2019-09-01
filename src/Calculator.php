<?php

/**
 * File-Level Doc block.
 */

declare(strict_types=1);

namespace theoAlex\Calculator;

/**
 *  This File includes the calculator class.
 *

 *
 * @package Calculator
 * @author  theoAlex <alex.theobald.dev@gmail.com>
 */

/**
 *  A calculator class.
 *
 *  This calculator class provides methods for commonly performed calculations
 *  like the greatest common factor, lowest common demoniator.
 */
final class Calculator
{
    /**
     * A method that returns a Sum.
     *
     * This method takes a variable amount of numbers and returns the sum.
     *
     *
     */
    public function calculateSum(...$nrs)
    {
        $sum = 0;
        foreach ($nrs as $nr) {
            if (!is_int($nr) && !is_float($nr)) {
                throw new \InvalidArgumentException();
            }
            $sum += $nr;
        }
        if (!is_int($sum) && !is_float($sum)) {
            throw new \InvalidArgumentException();
        }
        return $sum;
    }
}
