<?php
	test('pointDiff should return the derivative at a point, provided function', testCalculusPointDiff);
	function testCalculusPointDiff() {
		return (2 - NumbersCalculus::pointDiff(testCalculusPointDiffTestFunc, 5) < Numbers::EPSILON);
	}
	function testCalculusPointDiffTestFunc($x) {
		return 2 * $x + 2;
	}