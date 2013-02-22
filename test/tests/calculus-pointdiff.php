<?php
	test('pointDiff should return the derivative at a point, provided function', 'testCalculusPointDiff');
	function testCalculusPointDiff() {
		return (2 - NumbersPHP\Calculus::pointDiff('testCalculusPointDiffTestFunc', 5) < NumbersPHP\Numbers::EPSILON);
	}
	function testCalculusPointDiffTestFunc($x) {
		return 2 * $x + 2;
	}