<?php
	test('should return a function to calculate the linear regression of a set of points', testStatisticLinearRegression);
	function testStatisticLinearRegression() {
		$arrayX = array(1, 2, 3, 4, 5, 7, 8, 9);
		$arrayY = array(1, 2, 3, 4, 5, 7, 7, 9);
		$regressionFunction = NumbersStatistic::linearRegression($arrayX, $arrayY);
		if(!NumbersBasic::numbersEqual($regressionFunction(20), 19.07218683651805))
			return false;
		return true;
	}