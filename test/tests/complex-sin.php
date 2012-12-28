<?php
	test('sin should be able to get the sine of a complex number', 'testComplexSin');
	function testComplexSin() {
		$a = new NumbersComplex(3, -4);
		return $a->sin()->equals(new NumbersComplex(3.8537, 27.0168), Numbers::EPSILON);
	}