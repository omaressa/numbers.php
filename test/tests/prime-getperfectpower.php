<?php
	test('getPerfectPower should find a perfect power of n is if it exists', testPrimeGetPerfectPower);
	function testPrimeGetPerfectPower() {
		if(NumbersPrime::getPerfectPower(4) != array(2, 2))
			return false;
		if(NumbersPrime::getPerfectPower(1) !== false)
			return false;
		if(NumbersPrime::getPerfectPower(3) !== false)
			return false;
		if(NumbersPrime::getPerfectPower(9) != array(3, 2))
			return false;
		return true;
	}