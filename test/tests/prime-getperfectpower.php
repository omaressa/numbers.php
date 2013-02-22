<?php
	test('getPerfectPower should find a perfect power of n is if it exists', 'testPrimeGetPerfectPower');
	function testPrimeGetPerfectPower() {
		if(NumbersPHP\Prime::getPerfectPower(4) != array(2, 2))
			return false;
		if(NumbersPHP\Prime::getPerfectPower(1) !== false)
			return false;
		if(NumbersPHP\Prime::getPerfectPower(3) !== false)
			return false;
		if(NumbersPHP\Prime::getPerfectPower(9) != array(3, 2))
			return false;
		return true;
	}