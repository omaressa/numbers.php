<?php
	test('equals should be able to check for equality of two complex numbers', 'testComplexEquals');
	function testComplexEquals() {
		$a = new NumbersPHP\Complex(3, 4);
		if(!$a->equals(new NumbersPHP\Complex(3, 4), NumbersPHP\Numbers::EPSILON))
			return false;
		if(!$a->equals(new NumbersPHP\Complex(3, 4.0001), NumbersPHP\Numbers::EPSILON))
			return false;
		if(!$a->equals(new NumbersPHP\Complex(3.0001, 4), NumbersPHP\Numbers::EPSILON))
			return false;
		if($a->equals(new NumbersPHP\Complex(3.1, 4), NumbersPHP\Numbers::EPSILON))
			return false;
		if($a->equals(new NumbersPHP\Complex(3, 4.1), NumbersPHP\Numbers::EPSILON))
			return false;
		if($a->equals(new NumbersPHP\Complex(5, 4), NumbersPHP\Numbers::EPSILON))
			return false;
		return true;
	}