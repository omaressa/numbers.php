<?php
	test('limit should return the limit of a function at a given point from left, middle, or right', testCalculusLimit);
	function testCalculusLimit() {
		return NumbersBasic::numbersEqual(NumbersCalculus::limit(testCalculusLimitTestFunc, 10, 'middle'), 91.2945, Numbers::EPSILON);
	}
	function testCalculusLimitTestFunc($x) {
		return $x * $x * sin(2 * $x);
	}