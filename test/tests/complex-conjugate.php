<?php
	test('conjugate should return complex conjugate', testComplexConjugate);
	function testComplexConjugate() {
		$a = new NumbersComplex(3, 4);
		$b = $a->conjugate();
		if($b->real != 3)
			return false;
		if($b->imaginary != -4)
			return false;
		return true;
	}