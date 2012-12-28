<?php
	test('covariance should return covariance between two arrays', testStatisticCovariance);
	function testStatisticCovariance() {
		return NumbersBasic::numbersEqual(NumbersStatistic::covariance(array(-5, -4, -1, 0, 5, 100), array(-6, 5, 2, 5, 2, 6)), 66.05555555555556, Numbers::EPSILON);
	}