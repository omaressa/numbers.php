<?php
	test('pow should be able to get the power of a complex number', 'testComplexPow');
	function testComplexPow() {
		$a = new NumbersPHP\Complex(3, 4);
		$imaginary = new NumbersPHP\Complex(0, 4);
		$negativeImaginary = new NumbersPHP\Complex(0, -4);
		if(!$a->pow(1/2)->equals(new NumbersPHP\Complex(2, 1), NumbersPHP\Numbers::EPSILON))
			return false;
		if(!$a->pow(1/4)->equals(new NumbersPHP\Complex(1.455, 0.343), NumbersPHP\Numbers::EPSILON))
			return false;
		if(!$a->pow(0)->equals(new NumbersPHP\Complex(1, 0), NumbersPHP\Numbers::EPSILON))
			return false;
		if(!$a->pow(2)->equals(new NumbersPHP\Complex(-7, 24), NumbersPHP\Numbers::EPSILON))
			return false;
		if(!$a->pow(5)->equals(new NumbersPHP\Complex(-237, -3116), NumbersPHP\Numbers::EPSILON))
			return false;
		if(!$imaginary->pow(2)->equals(new NumbersPHP\Complex(-16, 0), NumbersPHP\Numbers::EPSILON))
			return false;
		if(!$negativeImaginary->pow(-2)->equals(new NumbersPHP\Complex(-1/16, 0), NumbersPHP\Numbers::EPSILON))
			return false;
		return true;
	}