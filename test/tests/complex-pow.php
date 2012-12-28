<?php
	test('pow should be able to get the power of a complex number', 'testComplexPow');
	function testComplexPow() {
		$a = new NumbersComplex(3, 4);
		$imaginary = new NumbersComplex(0, 4);
		$negativeImaginary = new NumbersComplex(0, -4);
		if(!$a->pow(1/2)->equals(new NumbersComplex(2, 1), Numbers::EPSILON))
			return false;
		if(!$a->pow(1/4)->equals(new NumbersComplex(1.455, 0.343), Numbers::EPSILON))
			return false;
		if(!$a->pow(0)->equals(new NumbersComplex(1, 0), Numbers::EPSILON))
			return false;
		if(!$a->pow(2)->equals(new NumbersComplex(-7, 24), Numbers::EPSILON))
			return false;
		if(!$a->pow(5)->equals(new NumbersComplex(-237, -3116), Numbers::EPSILON))
			return false;
		if(!$imaginary->pow(2)->equals(new NumbersComplex(-16, 0), Numbers::EPSILON))
			return false;
		if(!$negativeImaginary->pow(-2)->equals(new NumbersComplex(-1/16, 0), Numbers::EPSILON))
			return false;
		return true;
	}