<?php
	test('millerRabin should be able to determine if a number is prime or not', testPrimeMillerRabin);
	function testPrimeMillerRabin() {
		$primes = array(2, 17, 839, 3733, 999983);
		$composites = array(1, 4, 18, 25, 838, 3007);
		foreach($primes as $prime)
			if(!NumbersPrime::millerRabin($prime))
				return false;
		foreach($composites as $composite)
			if(NumbersPrime::millerRabin($composite))
				return false;
		return true;
	}