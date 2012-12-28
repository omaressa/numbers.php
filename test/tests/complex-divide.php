<?php
	test('divide should return the product of two complex numbers', 'testComplexDivide');
	function testComplexDivide() {
		$a = new NumbersComplex(10, 0);
		$b = new NumbersComplex(0, 10);
		$result = $a->divide($b);
		if($result->real != 0)
			return false;
		if($result->imaginary != -1)
			return false;
		return true;
	}