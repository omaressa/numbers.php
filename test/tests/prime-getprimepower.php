<?php
	test('getPrimePower should find what the prime power of n is if it exists', 'testPrimeGetPrimePower');
	function testPrimeGetPrimePower() {
		if(NumbersPHP\Prime::getPrimePower(4) != array(2, 2))
			return false;
		if(NumbersPHP\Prime::getPrimePower(1) !== false)
			return false;
		if(NumbersPHP\Prime::getPrimePower(3) != array(3, 1))
			return false;
		if(NumbersPHP\Prime::getPrimePower(9) != array(3, 2))
			return false;
		return true;
	}