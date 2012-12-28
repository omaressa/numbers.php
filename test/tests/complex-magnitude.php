<?php
	test('magnitude should return magnitude', 'testComplexMagnitude');
	function testComplexMagnitude() {
		$a = new NumbersComplex(3, 4);
		return $a->magnitude() == 5;
	}