<?php
	test('compexPow should be able to raise a complex number to a given complex power', 'testComplexComplexPow');
	function testComplexComplexPow() {
		$a = new NumbersPHP\Complex(0, 1);
		$b = new NumbersPHP\Complex(0, -1);
		if(!$a->complexPow($b)->equals(new NumbersPHP\Complex(4.81047, 0), NumbersPHP\Numbers::EPSILON))
			return false;
		$c = new NumbersPHP\Complex(3, 4);
		$d = new NumbersPHP\Complex(1, 2);
		if(!$c->complexPow($d)->equals(new NumbersPHP\Complex(-0.4198, -0.66), NumbersPHP\Numbers::EPSILON))
			return false;
		return true;
	}