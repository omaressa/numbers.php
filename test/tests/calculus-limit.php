<?php
	test('limit should return the limit of a function at a given point from left, middle, or right', 'testCalculusLimit');
	function testCalculusLimit() {
		return NumbersPHP\Basic::numbersEqual(NumbersPHP\Calculus::limit('testCalculusLimitTestFunc', 10, 'middle'), 91.2945, NumbersPHP\Numbers::EPSILON);
	}
	function testCalculusLimitTestFunc($x) {
		return $x * $x * sin(2 * $x);
	}