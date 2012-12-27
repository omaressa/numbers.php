<?php
	test('should be able to check for equality of two complex numbers', testComplexEquals);
	function testComplexEquals() {
		$a = new NumbersComplex(3, 4);
		if(!$a->equals(new NumbersComplex(3, 4), Numbers::EPSILON))
			return false;
		if(!$a->equals(new NumbersComplex(3, 4.0001), Numbers::EPSILON))
			return false;
		if(!$a->equals(new NumbersComplex(3.0001, 4), Numbers::EPSILON))
			return false;
		if($a->equals(new NumbersComplex(3.1, 4), Numbers::EPSILON))
			return false;
		if($a->equals(new NumbersComplex(3, 4.1), Numbers::EPSILON))
			return false;
		if($a->equals(new NumbersComplex(5, 4), Numbers::EPSILON))
			return false;
		return true;
	}