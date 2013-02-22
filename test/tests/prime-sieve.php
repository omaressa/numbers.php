<?php
	test('sieve should be able to determine if a number is prime or not', 'testPrimeSieve');
	function testPrimeSieve() {
		$results[] = array(NumbersPHP\Prime::sieve(1));
		$results[] = array(NumbersPHP\Prime::sieve(2), 2);
		$results[] = array(NumbersPHP\Prime::sieve(17), 2, 3, 5, 7, 11, 13, 17);
		foreach($results as $result)
			if($result[0] != array_slice($result, 1))
				return false;
		return true;
	}