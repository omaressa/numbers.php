<?php
	test('subtract should return the difference of two complex numbers', testComplexSubtract);
	function testComplexSubtract() {
		$a = new NumbersComplex(5, 8);
		$b = new NumbersComplex(3, 4);
		$result = $a->subtract($b);
		if($result->real != 2)
			return false;
		if($result->imaginary != 4)
			return false;
		return true;
	}