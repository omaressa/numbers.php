<?php
	test('adaptive simpson should return an estimated definite integral of a function', testCalculusAdaptiveSimpson);
	function testCalculusAdaptiveSimpson() {
		return NumbersBasic::numbersEqual(NumbersCalculus::adaptiveSimpson(testCalculusAdaptiveSimpsonTestFunc, 0, 100), 666666.66667, Numbers::EPSILON);
	}
	function testCalculusAdaptiveSimpsonTestFunc($x) {
		return 2 * $x * $x;
	}