<?php
	test('magnitude should return magnitude', 'testComplexMagnitude');
	function testComplexMagnitude() {
		$a = new NumbersPHP\Complex(3, 4);
		return $a->magnitude() == 5;
	}