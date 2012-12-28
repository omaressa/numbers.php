<?php
	test('tan should be able to get the tangent of a complex number', 'testComplexTan');
	function testComplexTan() {
		$a = new NumbersComplex(3, -4);
		$expected = $a->sin()->divide($a->cos());
		return $a->tan()->equals($expected, Numbers::EPSILON);
	}