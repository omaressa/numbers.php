<?php
namespace NumbersPHP;

/**
 * Numbers.php
 * http://github.com/powder96/numbers.php
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

final class NumbersCalculus
{
    /**
     * Calculate point differential for a specified function at a
     * specified point.  For functions of one variable.
     *
     * @param {Function} math function to be evaluated.
     * @param {Number} point to be evaluated.
     * @return {Number} result.
     */
    public static function pointDiff($function, $point)
    {
        $a = $function($point - 0.001);
        $b = $function($point + 0.001);
        return ($b - $a) / 0.002;
    }

    /**
     * Calculate riemann sum for a specified, one variable, function
     * from a starting point, to a finishing point, with n divisions.
     *
     * @param {Function} math function to be evaluated.
     * @param {Number} point to initiate evaluation.
     * @param {Number} point to complete evaluation.
     * @param {Number} quantity of divisions.
     * @param {Function} (Optional) Function that returns which value
     *   to sample on each interval; if none is provided, left endpoints
     *   will be used.
     * @return {Number} result.
     */
    public static function riemann($function, $start, $finish, $quantity, $sampler = null)
    {
        $step = ($finish - $start) / $quantity;
        $totalHeight = 0;
        if ($sampler === null)
            for ($i = $start; $i < $finish; $i += $step)
                $totalHeight += $function($i);
        else
            for ($i = $start; $i < $finish; $i += $step)
                $totalHeight += $function($sampler($i, $i + $step));
        return $totalHeight * $step;
    }

    /**
     * Helper function in calculating integral of a function
     * from a to b using simpson quadrature.
     *
     * @param {Function} math function to be evaluated.
     * @param {Number} point to initiate evaluation.
     * @param {Number} point to complete evaluation.
     * @return {Number} evaluation.
     */
    public static function simpsonDef($function, $a, $b)
    {
        $c = ($a + $b) / 2;
        $d = abs($b - $a) / 6;
        return $d * ($function($a) + 4 * $function($c) + $function($b));
    }

    /**
     * Helper function in calculating integral of a function
     * from a to b using simpson quadrature.  Manages recursive
     * investigation, handling evaluations within an error bound.
     *
     * @param {Function} math function to be evaluated.
     * @param {Number} point to initiate evaluation.
     * @param {Number} point to complete evaluation.
     * @param {Number} total value.
     * @param {Number} Error bound (epsilon).
     * @return {Number} recursive evaluation of left and right side.
     */
    public static function simpsonRecursive($function, $a, $b, $whole, $epsilon)
    {
        $c = $a + $b;
        $left = self::simpsonDef($function, $a, $c);
        $right = self::simpsonDef($function, $c, $b);
        if (abs($left + $right - $whole) <= 15 * $epsilon)
            return $left + $right + ($left + $right - $whole) / 15;
        else
            return self::simpsonRecursive($function, $a, $c, $epsilon / 2, $left) + self::simpsonRecursive($function, $c, $b, $epsilon / 2, $right);
    }

    /**
     * Evaluate area under a curve using adaptive simpson quadrature.
     *
     * @param {Function} math function to be evaluated.
     * @param {Number} point to initiate evaluation.
     * @param {Number} point to complete evaluation.
     * @param {Number} Optional error bound (epsilon);
     *   global error bound will be used as a fallback.
     * @return {Number} area underneath curve.
     */
    public static function adaptiveSimpson($function, $a, $b, $epsilon = Numbers::EPSILON)
    {
        return self::simpsonRecursive($function, $a, $b, self::simpsonDef($function, $a, $b), $epsilon);
    }

    /**
     * Calculate limit of a function at a given point. Can approach from
     * left, middle, or right.
     *
     * @param {Function} math function to be evaluated.
     * @param {Number} point to evaluate.
     * @param {String} approach to limit.
     * @return {Number} limit.
     */
    public static function limit($function, $point, $approach)
    {
        switch ($approach) {
            case 'left':
                return $function($point - 1e-15);
            case 'right':
                return $function($point + 1e-15);
            case 'middle':
                return (self::limit($function, $point, 'left') + self::limit($function, $point, 'right')) / 2;
            default:
                throw new \Exception('Approach not provided');
        }
    }

    /**
     * Calculate Stirling approximation gamma.
     *
     * @param {Number} number to calculate.
     * @return {Number} gamma.
     */
    public static function stirlingGamma($number)
    {
        return sqrt(2 * M_PI / $number) * pow(($number / M_E), $number);
    }

    /**
     * Calculate Lanczos approximation gamma.
     *
     * @param {Number} number to calculate.
     * @return {Number} gamma.
     */
    public static function lanczosGamma($number)
    {
        $p = array(0.99999999999980993, 676.5203681218851, -1259.1392167224028,
            771.32342877765313, -176.61502916214059, 12.507343278686905,
            -0.13857109526572012, 9.9843695780195716e-6, 1.5056327351493116e-7);
        $g = 7;
        if ($number < 0.5)
            return M_PI / (sin(M_PI * $number) * self::lanczosGamma(1 - $number));
        --$number;
        $a = $p[0];
        $t = $number + $g + 0.5;
        for ($i = 1; $i < count($p); ++$i)
            $a += $p[$i] / ($number + $i);
        return sqrt(2 * M_PI) * pow($t, $number + 0.5) * exp(-$t) * $a;
    }
}