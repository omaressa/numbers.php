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

final class NumbersMatrix
{
    /**
     * Return a deep copy of the input matrix.
     *
     * @param {Array} matrix to copy.
     * @return {Array} copied matrix.
     */
    public static function deepCopy($matrix)
    {
        if (!isset($matrix[0][0]))
            throw new Exception('Input cannot be a vector.');
        return $matrix;
    }

    /**
     * Return true if matrix is square, false otherwise.
     *
     * @param {Array} arr
     */
    public static function isSquare($matrix)
    {
        $rows = count($matrix);
        $columns = count($matrix[0]);
        return $rows == $columns;
    }

    /**
     * Add two matrices together.  Matrices must be of same dimension.
     *
     * @param {Array} matrix A.
     * @param {Array} matrix B.
     * @return {Array} summed matrix.
     */
    public static function addition($a, $b)
    {
        if (($rows = count($a)) != count($b) || ($columns = count($a[0])) != count($b[0]))
            throw new Exception('Matrix mismatch');
        $sum = array();
        for ($y = 0; $y < $rows; ++$y)
            for ($x = 0; $x < $columns; ++$x)
                $sum[$y][$x] = $a[$y][$x] + $b[$y][$x];
        return $sum;
    }

    /**
     * Scalar multiplication on an matrix.
     *
     * @param {Array} matrix.
     * @param {Number} scalar.
     * @return {Array} updated matrix.
     */
    public static function scalar($a, $b)
    {
        $rows = count($a);
        $columns = count($a[0]);
        $product = array();
        for ($y = 0; $y < $rows; ++$y)
            for ($x = 0; $x < $columns; ++$x)
                $product[$y][$x] = $a[$y][$x] * $b;
        return $product;
    }

    /**
     * Transpose a matrix.
     *
     * @param {Array} matrix.
     * @return {Array} transposed matrix.
     */
    public static function transpose($matrix)
    {
        $rows = count($matrix);
        $columns = count($matrix[0]);
        $transposed = array();
        for ($y = 0; $y < $rows; ++$y)
            for ($x = 0; $x < $columns; ++$x)
                $transposed[$x][$y] = $matrix[$y][$x];
        return $transposed;
    }

    /**
     * Create an identity matrix of dimension n x n.
     *
     * @param {Number} dimension of the identity array to be returned.
     * @return {Array} n x n identity matrix.
     */
    public static function identity($dimension)
    {
        $identity = array();
        for ($y = 0; $y < $dimension; ++$y)
            for ($x = 0; $x < $dimension; ++$x)
                $identity[$y][$x] = (int)($x == $y);
        return $identity;
    }

    /**
     * Evaluate dot product of two vectors.  Vectors must be of same length.
     *
     * @param {Array} vector.
     * @param {Array} vector.
     * @return {Array} dot product.
     */
    public static function dotproduct($a, $b)
    {
        if (($length = count($a)) != count($b))
            throw new Exception('Vector mismatch');
        $product = 0;
        for ($i = 0; $i < $length; ++$i)
            $product += $a[$i] * $b[$i];
        return $product;
    }

    /**
     * Multiply two matrices. They must abide by standard matching.
     *
     * e.g. A x B = (m x n) x (n x m), where n, m are integers who define
     * the dimensions of matrices A, B.
     *
     * @param {Array} matrix.
     * @param {Array} matrix.
     * @return {Array} result of multiplied matrices.
     */
    public static function multiply($a, $b)
    {
        if (count($a[0]) != count($b))
            throw new Exception('Array mismatch');
        $rows = count($a);
        $columns = count($b[0]);
        $bT = self::transpose($b);
        $product = array();
        for ($y = 0; $y < $rows; ++$y)
            for ($x = 0; $x < $columns; ++$x)
                $product[$y][$x] = self::dotproduct($a[$y], $bT[$x]);
        return $product;
    }

    /**
     * Evaluate determinate of matrix.  Expect speed
     * degradation for matrices over 4x4.
     *
     * @param {Array} matrix.
     * @return {Number} determinant.
     */
    public static function determinant($matrix)
    {
        $rows = count($matrix);
        $columns = count($matrix[0]);
        if ($rows != $columns)
            throw new Exception('Not a square matrix');
        $determinant = 0;
        if ($rows == 1)
            return $matrix[0][0];
        if ($rows == 2)
            return $matrix[0][0] * $matrix[1][1] - $matrix[0][1] * $matrix[1][0];
        for ($x = 0; $x < $columns; ++$x) {
            $diagLeft = $diagRight = $matrix[0][$x];
            for ($y = 1; $y < $rows; ++$y) {
                $diagRight *= $matrix[$y][((($x + $y) % $columns) + $columns) % $columns];
                $diagLeft *= $matrix[$y][((($x - $y) % $columns) + $columns) % $columns];
            }
            $determinant += $diagRight - $diagLeft;
        }
        return $determinant;
    }

    /**
     * Returns a LUP decomposition of the given matrix such that:
     *
     * A*P = L*U
     *
     * Where
     * A is the input matrix
     * P is a pivot matrix
     * L is a lower triangular matrix
     * U is a upper triangular matrix
     *
     * This method returns an array of three matrices such that:
     *
     * matrix.lupDecomposition(array) = [L, U, P]
     *
     * @param {Array} arr
     * @return {Array} array of matrices [L, U, P]
     */
    public static function lupDecomposition($matrix)
    {
        if (!self::isSquare($matrix))
            throw new Exception('Matrix must be square');
        $size = count($matrix);
        $lu = $matrix;
        $p = self::transpose(self::identity($size));
        for ($x = 0; $x < $size; ++$x) {
            for ($y = 0; $y < $size; ++$y) {
                $minIndex = min($x, $y);
                $s = 0;
                for ($k = 0; $k < $minIndex; ++$k)
                    $s += $lu[$y][$k] * $lu[$k][$x];
                $lu[$y][$x] -= $s;
            }
            // find pivot
            $pivot = $x;
            for ($y = $x + 1; $y < $size; ++$y)
                if (abs($lu[$y][$x]) > abs($lu[$pivot][$x]))
                    $pivot = $y;
            if ($pivot != $x) {
                $lu = self::rowSwitch($lu, $pivot, $x);
                $p = self::rowSwitch($p, $pivot, $x);
            }
            if ($x < $size && $lu[$x][$x] != 0)
                for ($y = $x + 1; $y < $size; ++$y)
                    $lu[$y][$x] /= $lu[$x][$x];
        }
        return array(self::lupDecompositionGetL($lu), self::lupDecompositionGetU($lu), $p);
    }

    private static function lupDecompositionGetL($matrix)
    {
        $size = count($matrix[0]);
        $l = self::identity($size);
        for ($y = 0; $y < $size; ++$y)
            for ($x = 0; $x < $size; ++$x)
                if ($y > $x)
                    $l[$y][$x] = $matrix[$y][$x];
        return $l;
    }

    private static function lupDecompositionGetU($matrix)
    {
        $size = count($matrix[0]);
        $u = self::identity($size);
        for ($y = 0; $y < $size; ++$y)
            for ($x = 0; $x < $size; ++$x)
                if ($y <= $x)
                    $u[$y][$x] = $matrix[$y][$x];
        return $u;
    }

    /**
     * Rotate a two dimensional vector by degree.
     *
     * @param {Array} point.
     * @param {Number} degree.
     * @param {String} direction - clockwise or counterclockwise.
     * @return {Array} vector.
     */
    public static function rotate($point, $angle, $direction)
    {
        if (count($point) != 2)
            throw new Exception('Only two dimensional operations are supported at this time');
        $negate = $direction == 'clockwise' ? -1 : 1;
        $angle = deg2rad($angle);
        $transformation = array(array(cos($angle), -1 * $negate * sin($angle)),
            array($negate * sin($angle), cos($angle)));
        return self::multiply($transformation, $point);
    }

    /**
     * Scale a two dimensional vector by scale factor x and scale factor y.
     *
     * @param {Array} point.
     * @param {Number} sx.
     * @param {Number} sy.
     * @return {Array} vector.
     */
    public static function scale($point, $x, $y)
    {
        if (count($point) != 2)
            throw new Exception('Only two dimensional operations are supported at this time');
        $transformation = array(array($x, 0),
            array(0, $y));
        return self::multiply($transformation, $point);
    }

    /**
     * Shear a two dimensional vector by shear factor k.
     *
     * @param {Array} point.
     * @param {Number} k.
     * @param {String} direction - xaxis or yaxis.
     * @return {Array} vector.
     */
    public static function shear($point, $k, $direction)
    {
        if (count($point) != 2)
            throw new Exception('Only two dimensional operations are supported at this time');
        $transformation = array(array(1, ($direction == 'xaxis' ? $k : 0)),
            array(($direction == 'yaxis' ? $k : 0), 1));
        return self::multiply($transformation, $point);
    }

    /**
     * Perform an affine transformation on the given vector.
     *
     * @param {Array} point.
     * @param {Number} tx.
     * @param {Number} ty.
     * @return {Array} vector.
     */
    public static function affine($point, $x, $y)
    {
        if (count($point) != 2)
            throw new Exception('Only two dimensional operations are supported at this time');
        $transformation = array(array(1, 0, $x),
            array(0, 1, $y),
            array(0, 0, 1));
        $newPoint = array(array($point[0][0]),
            array($point[1][0]),
            array(1));
        $transformed = self::multiply($transformation, $newPoint);
        return array(array($transformed[0][0]),
            array($transformed[1][0]));
    }

    /**
     * Scales a row of a matrix by a factor and returns the updated matrix.
     * Used in row reduction functions.
     *
     * @param {Array} matrix.
     * @param {Number} row.
     * @param {Number} scale.
     */
    public static function rowScale($matrix, $row, $scale)
    {
        $rows = count($matrix);
        $columns = count($matrix[0]);
        $updated = array();
        for ($y = 0; $y < $rows; ++$y)
            for ($x = 0; $x < $columns; ++$x) {
                if ($y == $row)
                    $updated[$y][$x] = $scale * $matrix[$y][$x];
                else
                    $updated[$y][$x] = $matrix[$y][$x];
            }
        return $updated;
    }

    /**
     * Swaps two rows of a matrix  and returns the updated matrix.
     * Used in row reduction functions.
     *
     * @param {Array} matrix.
     * @param {Number} row1.
     * @param {Number} row2.
     */
    public static function rowSwitch($matrix, $row1, $row2)
    {
        $rows = count($matrix);
        $columns = count($matrix[0]);
        $updated = array();
        for ($y = 0; $y < $rows; ++$y)
            for ($x = 0; $x < $columns; ++$x) {
                if ($y == $row1)
                    $updated[$y][$x] = $matrix[$row2][$x];
                elseif ($y == $row2)
                    $updated[$y][$x] = $matrix[$row1][$x]; else
                    $updated[$y][$x] = $matrix[$y][$x];
            }
        return $updated;
    }

    /**
     * Adds a multiple of one row to another row
     * in a matrix and returns the updated matrix.
     * Used in row reduction functions.
     *
     * @param {Array} matrix.
     * @param {Number} row1.
     * @param {Number} row2.
     */
    public static function rowAddMultiple($matrix, $from, $to, $scale)
    {
        $rows = count($matrix);
        $columns = count($matrix[0]);
        $updated = array();
        for ($y = 0; $y < $rows; ++$y)
            for ($x = 0; $x < $columns; ++$x) {
                if ($y == $to)
                    $updated[$y][$x] = $matrix[$to][$x] + $scale * $matrix[$from][$x];
                else
                    $updated[$y][$x] = $matrix[$y][$x];
            }
        return $updated;
    }
}