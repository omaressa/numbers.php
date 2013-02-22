<?php
	test('cos should be able to get the cosine of a complex number', 'testComplexCos');
	function testComplexCos() {
		$a = new NumbersPHP\Complex(3, -4);
		return $a->cos()->equals(new NumbersPHP\Complex(-27.0349, 3.8511), NumbersPHP\Numbers::EPSILON);
	}