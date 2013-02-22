<?php
	test('mean should return average value amongst integers in an array', 'testStatisticMean');
	function testStatisticMean() {
		return NumbersPHP\Statistic::mean(array(0, 1, 2)) == 1;
	}