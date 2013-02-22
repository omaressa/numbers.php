<?php
	test('multiply should return the product of two complex numbers', 'testComplexMultiply');
	function testComplexMultiply() {
		$a = new NumbersPHP\Complex(3, 4);
		$b = new NumbersPHP\Complex(5, 6);
		$result = $a->multiply($b);
		if($result->real != -9)
			return false;
		if($result->imaginary != 38)
			return false;
		return true;
	}