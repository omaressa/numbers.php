<?php
	test('getPrimePower should find what the prime power of n is if it exists', 'testPrimeGetPrimePower');
	function testPrimeGetPrimePower() {
		if(NumbersPrime::getPrimePower(4) != array(2, 2))
			return false;
		if(NumbersPrime::getPrimePower(1) !== false)
			return false;
		if(NumbersPrime::getPrimePower(3) != array(3, 1))
			return false;
		if(NumbersPrime::getPrimePower(9) != array(3, 2))
			return false;
		return true;
	}