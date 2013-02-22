<?php
	test('report should return a correct set of summary statistics', 'testStatisticReport');
	function testStatisticReport() {
		$report = NumbersPHP\Statistic::report(array(-5, -4, -1, 0, 5, 100));
		if(!NumbersPHP\Basic::numbersEqual($report['mean'], 15.833))
			return false;
		if(!NumbersPHP\Basic::numbersEqual($report['firstQuartile'], -4))
			return false;
		if(!NumbersPHP\Basic::numbersEqual($report['median'], -0.5))
			return false;
		if(!NumbersPHP\Basic::numbersEqual($report['thirdQuartile'], 5))
			return false;
		if(!NumbersPHP\Basic::numbersEqual($report['standardDev'], 37.777))
			return false;
		return true;
	}