<?php
	test('exponentialRegression should return a function to calculate the exponential regression of an array of numbers', 'testStatisticExponentialRegression');
	function testStatisticExponentialRegression() {
		$source = array(10, 9, 8, 8, 7, 7, 6, 6.5, 6.4, 6.3, 6.2);
		$regressionValues = array(9.077131929916444, 8.66937771538526 , 8.279940244595563 , 7.907996710352883,
								  7.552761266818376, 7.213483369166244, 6.8894461878255076, 6.579965093955639,
								  6.284386212956255, 6.002085042954625, 5.732465135352174 );
		
		$exponentialRegression = NumbersPHP\Statistic::exponentialRegression($source);
		$regressionFunction = $exponentialRegression[0];
		$regressionRSquared = $exponentialRegression[1];
		
		if(!NumbersPHP\Basic::numbersEqual($regressionRSquared, 0.8491729985314136))
			return false;
		
		$regressionFunctionValues = $regressionFunction(NumbersPHP\Basic::range(1, count($source)));
		for($i = 0; $i < count($regressionValues); ++$i)
			if(!NumbersPHP\Basic::numbersEqual($regressionValues[$i], $regressionFunctionValues[$i]))
				return false;
		
		if(!NumbersPHP\Basic::numbersEqual($regressionFunction(1), 9.077131929916444))
			return false;
		
		if(!NumbersPHP\Basic::numbersEqual($regressionFunction(15), 4.769782016165231))
			return false;
		
		return true;
	}