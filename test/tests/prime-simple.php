<?php
	test('simple should be able to determine if a number is prime or not', 'testPrimeSimple');
	function testPrimeSimple() {
		$primes = array(2, 17, 839, 3733, 999983);
		$composites = array(1, 4, 18, 25, 838, 3007);
		foreach($primes as $prime)
			if(!NumbersPHP\Prime::simple($prime))
				return false;
		foreach($composites as $composite)
			if(NumbersPHP\Prime::simple($composite))
				return false;
		return true;
	}