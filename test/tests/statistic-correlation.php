<?php
	test('correlation should return correlation between two arrays', testStatisticCorrelation);
	function testStatisticCorrelation() {
		return NumbersBasic::numbersEqual(NumbersStatistic::correlation(array(-5, -4, -1, 0, 5, 100), array(-6, 5, 2, 5, 2, 6)), 0.43413125731182334, Numbers::EPSILON);
	}