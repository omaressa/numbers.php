<?php
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

	final class NumbersBasic {
		/**
		 * Determine the summation of numbers in a given array.
		 *
		 * @param {Array} collection of numbers.
		 * @return {Number} sum of numbers in array.
		 */
		public static function sum($array) {
			if(!is_array($array))
				throw new Exception('Input must be of type Array');
			$total = 0;
			for($i = 0, $arrayLength = count($array); $i < $arrayLength; ++$i) {
				if(!is_numeric($array[$i]))
					throw new Exception('All elements in array must be numbers');
				$total += $array[$i];
			}
			return $total;
		}
		
		/**
		 * Subtracts elements from one another in array.
		 *
		 * e.g [5,3,1,-1] -> (-1) - 1 - 3 - 5 = -10
		 *
		 * @param {Array} collection of numbers.
		 * @return {Number} difference.
		 */
		public static function subtraction($array) {
			if(!is_array($array))
				throw new Exception('Input must be of type Array');
			$total = $array[count($array) - 1];
			for($i = count($array) - 2; $i >= 0; --$i) {
				if(!is_numeric($array[$i]))
					throw new Exception('All elements in array must be numbers');
				$total -= $array[$i];
			}
			return $total;
		}
		 
		/**
		 * Product of all elements in an array.
		 *
		 * @param {Array} collection of numbers.
		 * @return {Number} product.
		 */
		public static function product($array) {
			if(!is_array($array))
				throw new Exception('Input must be of type Array');
			$total = 1;
			for($i = 0, $arrayLength = count($array); $i < $arrayLength; ++$i) {
				if(!is_numeric($array[$i]))
					throw new Exception('All elements in array must be numbers');
				$total *= $array[$i];
			}
			return $total;
		}
		 
		/**
		 * Return the square of any value.
		 *
		 * @param {Number} number
		 * @return {Number} square of number
		 */
		public static function square($number) {
			return $number * $number;
		}
		 
		/**
		 * Calculate the binomial coefficient (n choose k)
		 *
		 * @param {Number} available choices
		 * @param {Number} number chosen
		 * @return {Number} number of possible choices
		 */
		public static function binomial($n, $k) {
			$array = array();
			return self::_binomial($array, $n, $k);
		}
		private static function _binomial(&$array, $n, $k) {
			if($n >= 0 && $k == 0)
				return 1;
			if($n == 0 && $k > 0)
				return 0;
			if(isset($array[$n]) && $array[$n][$k] > 0)
				return $array[$n][$k];
			if(!isset($array[$n]))
				$array[$n] = array();
			return $array[$n][$k] = self::_binomial($array, $n - 1, $k - 1) + self::_binomial($array, $n - 1, $k);
		}
		 
		/**
		 * Factorial for some integer.
		 *
		 * @param {Number} integer.
		 * @return {Number} result.
		 */
		public static function factorial($number) {
			$factorial = 1;
			for($i = 2; $i <= $number; ++$i)
				$factorial *= $i;
			return $factorial;
		}
		 
		/**
		 * Calculate the greastest common divisor amongst two integers.
		 * Taken from Ratio.js https://github.com/LarryBattle/Ratio.js
		 * 
		 * @param {Number} number A.
		 * @param {Number} number B.
		 * @return {Number} greatest common divisor for integers A, B.
		 */
		public static function gcd($a, $b) {
			$b = (+$b && +$a) ? +$b : 0;
			$a = $b ? $a : 1;
			while($b) {
				$c = $a % $b;
				$a = $b;
				$b = $c;
			}
			return abs($a);
		}
		 
		/**
		 * Calculate the least common multiple amongst two integers.
		 *
		 * @param {Number} number A.
		 * @param {Number} number B.
		 * @return {Number} least common multiple for integers A, B.
		 */
		public static function lcm($a, $b) {
			return abs($a * $b) / self::gcd($a, $b);
		}
		
		/**
		 * Retrieve a specified quantity of elements from an array, at random.
		 *
		 * @param {Array} set of values to select from.
		 * @param {Number} quantity of elements to retrieve.
		 * @param {Boolean} allow the same number to be returned twice.
		 * @return {Array} random elements.
		 */
		public static function random($array, $quantity, $allowDuplicates) {
			if(empty($array))
				throw new Exception('Empty array');
			$arrayLength = count($array);
			if($quantity > $arrayLength && !$allowDuplicates)
				throw new Exception('Quantity requested exceeds size of array');
			if($allowDuplicates) {
				$result = array();
				for($i = 0; $i < $quantity; ++$i)
					$result[$i] = $array[mt_rand(0, $arrayLength - 1)];
				return $result;
			}
			else
				return array_slice(self::shuffle($array), 0, $quantity);
		}
		
		/**
		 * Shuffle an array, in place.
		 *
		 * @param {Array} array to be shuffled.
		 * @return {Array} shuffled array.
		 */
		public static function shuffle($array) {
			for($i = count($array) - 1; $i >= 0; --$i) {
				$j = mt_rand(0, $i);
				$t = $array[$i];
				$array[$i] = $array[$j];
				$array[$j] = $t;
			}
			return $array;
		}
		
		/**
		 * Find maximum value in an array.
		 *
		 * @param {Array} array to be traversed.
		 * @return {Number} maximum value in the array.
		 */
		public static function max($array) {
			return max($array);
		}
		
		/**
		 * Find minimum value in an array.
		 *
		 * @param {Array} array to be traversed.
		 * @return {Number} minimum value in the array.
		 */
		public static function min($array) {
			return min($array);
		}
		
		/**
		 * Create a range of numbers.
		 *
		 * @param {Number} The start of the range.
		 * @param {Number} The end of the range.
		 * @return {Array} An array containing numbers within the range.
		 */
		public static function range($start = 0, $stop = null, $step = 1) {
			if($stop === null)
				$stop = $start;
			if($stop < $start)
				$step = -abs($step);
			$array = array();
			$length = max(ceil(($stop - $start) / $step + 1), 0);
			for($i = 0; $i < $length; ++$i) {
				$array[$i] = $start;
				$start += $step;
			}
			return $array;
		}
		
		/**
		 * Determine if the number is an integer.
		 *
		 * @param {Number} the number
		 * @return {Boolean} true for int, false for not int.
		 */
		public static function isInt($number) {
			if(is_numeric($number))
				return (int)$number == (float)$number;
			else
				return false;
		}
		 
		/**
		 * Calculate the divisor and modulus of two integers.
		 *
		 * @param {Number} int a.
		 * @param {Number} int b.
		 * @return {Array} [div, mod].
		 */
		public static function divMod($a, $b) {
			if(!self::isInt($a) || !self::isInt($b))
				return false;
			return array(floor($a / $b), $a % $b);
		}
		
		/**
		 * Calculate:
		 * if b >= 1: a^b mod m.
		 * if b = -1: modInverse(a, m).
		 * if b < 1: finds a modular rth root of a such that b = 1/r.
		 *
		 * @param {Number} Number a.
		 * @param {Number} Number b.
		 * @param {Number} Modulo m.
		 * @return {Number} see the above documentation for return values.
		 */
		public static function powerMod($a, $b, $m) {
			// If b < -1 should be a small number, this method should work for now.
			if($b < -1)
				return pow($a, $b) % $m;
			if($b === 0)
				return 1 % $m;
			if($b >= 1) {
				$result = 1;
				while($b > 0) {
					if($b % 2 === 1)
						$result = ($result * $a) % $m;
					$a = $a*$a % $m;
					$b = $b >> 1;
				}
				return $result;
			}
			if($b === -1)
				return self::modInverse($a, $m);
			if($b < 1)
				return self::powerMod($a, pow($b, -1), $m);
		}
		
		/**
		 * Calculate the extended Euclid Algorithm or extended GCD.
		 *
		 * @param {Number} int a.
		 * @param {Number} int b.
		 * @return {Array} [a, x, y] a is the GCD. x and y are the values such that ax + by = gcd(a, b) .
		 */
		public static function egcd($a, $b) {
			$x = (+$b && +$a) ? 1 : 0;
			$y = $b ? 0 : 1;
			$u = $x ? 0 : 1;
			$v = $y ? 0 : 1;
			$b = $x ? +$b : 0;
			$a = $b ? $a : 1;
			while($b) {
				$divMod = self::divMod($a, $b);
				$m = $x - $u * $divMod[0];
				$n = $y - $v * $divMod[0];
				$a = $b;
				$b = $divMod[1];
				$x = $u;
				$y = $v;
				$u = $m;
				$v = $n;
			}
			return array($a, $x, $y);
		}
		
		/**
		 * Calculate the modular inverse of a number.
		 *
		 * @param {Number} Number a.
		 * @param {Number} Modulo m.
		 * @return {Number} if true, return number, else throw error.
		 */
		public static function modInverse($a, $m) {
			$r = self::egcd($a, $m);
			if($r[0] != 1)
				throw new Exception('No modular inverse exists');
			return $r[1] % $m;
		}
		
		/**
		 * Determine is two numbers are equal within a given margin of precision.
		 *
		 * @param {Number} first number.
		 * @param {Number} second number.
		 * @param {Number} epsilon.
		 */
		public static function numbersEqual($first, $second, $epsilon = Numbers::EPSILON) {
			$delta = $first - $second;
			return $delta < $epsilon && $delta > -$epsilon;
		}
	}