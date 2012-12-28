<?php
	test('factorization should return an empty array for values < 2, infinite or not numeric', testPrimeFactorization01);
	function testPrimeFactorization01() {
		$results[] = NumbersPrime::factorization(INF);
		$results[] = NumbersPrime::factorization();
		$results[] = NumbersPrime::factorization(null);
		$results[] = NumbersPrime::factorization(-1);
		$results[] = NumbersPrime::factorization(0);
		$results[] = NumbersPrime::factorization(1);
		foreach($results as $result)
			if(!empty($result))
				return false;
		return true;
	}
	
	test('factorization should return the prime factors for x where 1 < x < infinity', testPrimeFactorization02);
	function testPrimeFactorization02() {
		$results[] = array(NumbersPrime::factorization(2), 2);
		$results[] = array(NumbersPrime::factorization(6), 2, 3);
		$results[] = array(NumbersPrime::factorization(9), 3, 3);
		$results[] = array(NumbersPrime::factorization('729'), 3, 3, 3, 3, 3, 3);
		$results[] = array(NumbersPrime::factorization(3333333791), 2347, 1420253);
		$results[] = array(NumbersPrime::factorization(123456789), 3, 3, 3607, 3803);
		$results[] = array(NumbersPrime::factorization(9876543210), 2, 3, 3, 5, 17, 17, 379721);
		$results[] = array(NumbersPrime::factorization('103103103'), 3, 103, 333667);
		foreach($results as $result)
			if($result[0] != array_slice($result, 1))
				return false;
		return true;
	}