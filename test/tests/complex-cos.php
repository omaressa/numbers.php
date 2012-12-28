<?php
	test('cos should be able to get the cosine of a complex number', 'testComplexCos');
	function testComplexCos() {
		$a = new NumbersComplex(3, -4);
		return $a->cos()->equals(new NumbersComplex(-27.0349, 3.8511), Numbers::EPSILON);
	}