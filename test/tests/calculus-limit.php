<?php
	test('limit should return the limit of a function at a given point from left, middle, or right', testCalculusLimit);
	function testCalculusLimit() {
		$result = NumbersCalculus::limit(testCalculusLimitTestFunc, 10, 'middle');
		return ($result - Numbers::EPSILON < 91.2945 && 91.2945 < $result + Numbers::EPSILON);
	}
	function testCalculusLimitTestFunc($x) {
		return $x * $x * sin(2 * $x);
	}