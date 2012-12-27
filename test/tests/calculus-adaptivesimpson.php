<?php
	test('adaptive simpson should return an estimated definite integral of a function', testCalculusAdaptiveSimpson);
	function testCalculusAdaptiveSimpson() {
		$result = NumbersCalculus::adaptiveSimpson(testCalculusAdaptiveSimpsonTestFunc, 0, 100);
		return ($result - Numbers::EPSILON < 666666.66667 && 666666.66667 < $result + Numbers::EPSILON);
	}
	function testCalculusAdaptiveSimpsonTestFunc($x) {
		return 2 * $x * $x;
	}