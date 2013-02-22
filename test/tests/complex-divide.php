<?php
	test('divide should return the product of two complex numbers', 'testComplexDivide');
	function testComplexDivide() {
		$a = new NumbersPHP\Complex(10, 0);
		$b = new NumbersPHP\Complex(0, 10);
		$result = $a->divide($b);
		if($result->real != 0)
			return false;
		if($result->imaginary != -1)
			return false;
		return true;
	}