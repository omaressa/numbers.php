<?php
	test('standardDev should return the standard deviation of an array of numbers', 'testStatisticStandardDev');
	function testStatisticStandardDev() {
		return NumbersPHP\Basic::numbersEqual(NumbersPHP\Statistic::standardDev(array(-5, -4, -1, 0, 5, 100)), 37.777, NumbersPHP\Numbers::EPSILON);
	}