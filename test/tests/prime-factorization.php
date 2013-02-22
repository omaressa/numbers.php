<?php
	test('factorization should return an empty array for values < 2, infinite or not numeric', 'testPrimeFactorization01');
	function testPrimeFactorization01() {
		$results[] = NumbersPHP\Prime::factorization(INF);
		$results[] = NumbersPHP\Prime::factorization();
		$results[] = NumbersPHP\Prime::factorization(null);
		$results[] = NumbersPHP\Prime::factorization(-1);
		$results[] = NumbersPHP\Prime::factorization(0);
		$results[] = NumbersPHP\Prime::factorization(1);
		foreach($results as $result)
			if(!empty($result))
				return false;
		return true;
	}
	
	test('factorization should return the prime factors for x where 1 < x < infinity', 'testPrimeFactorization02');
	function testPrimeFactorization02() {
		$results[] = array(NumbersPHP\Prime::factorization(2), 2);
		$results[] = array(NumbersPHP\Prime::factorization(6), 2, 3);
		$results[] = array(NumbersPHP\Prime::factorization(9), 3, 3);
		$results[] = array(NumbersPHP\Prime::factorization('729'), 3, 3, 3, 3, 3, 3);
		$results[] = array(NumbersPHP\Prime::factorization(3333333791), 2347, 1420253);
		$results[] = array(NumbersPHP\Prime::factorization(123456789), 3, 3, 3607, 3803);
		$results[] = array(NumbersPHP\Prime::factorization(9876543210), 2, 3, 3, 5, 17, 17, 379721);
		$results[] = array(NumbersPHP\Prime::factorization('103103103'), 3, 103, 333667);
		foreach($results as $result)
			if($result[0] != array_slice($result, 1))
				return false;
		return true;
	}