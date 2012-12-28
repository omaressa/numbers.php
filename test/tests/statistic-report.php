<?php
	test('report should return a correct set of summary statistics', testStatisticReport);
	function testStatisticReport() {
		$report = NumbersStatistic::report(array(-5, -4, -1, 0, 5, 100));
		if(!NumbersBasic::numbersEqual($report['mean'], 15.833))
			return false;
		if(!NumbersBasic::numbersEqual($report['firstQuartile'], -4))
			return false;
		if(!NumbersBasic::numbersEqual($report['median'], -0.5))
			return false;
		if(!NumbersBasic::numbersEqual($report['thirdQuartile'], 5))
			return false;
		if(!NumbersBasic::numbersEqual($report['standardDev'], 37.777))
			return false;
		return true;
	}