<?php
	test('should be able to raise a complex number to a given complex power', testComplexComplexPow);
	function testComplexComplexPow() {
		$a = new NumbersComplex(0, 1);
		$b = new NumbersComplex(0, -1);
		if(!$a->complexPow($b)->equals(new NumbersComplex(4.81047, 0), Numbers::EPSILON))
			return false;
		$c = new NumbersComplex(3, 4);
		$d = new NumbersComplex(1, 2);
		if(!$c->complexPow($d)->equals(new NumbersComplex(-0.4198, -0.66), Numbers::EPSILON))
			return false;
		return true;
	}