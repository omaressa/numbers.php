<?php
	test('randomSample should return an array of random numbers in a certain bound', 'testStatisticRandomSample');
	function testStatisticRandomSample() {
		$lower = 5;
		$upper = 100;
		$samples = 5;
		$result = NumbersPHP\Statistic::randomSample($lower, $upper, $samples);
		if(count($result) != $samples)
			return false;
		foreach($result as $number)
			if($number < $lower || $number > $upper)
				return false;
		return true;
	}