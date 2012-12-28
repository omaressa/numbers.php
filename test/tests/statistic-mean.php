<?php
	test('mean should return average value amongst integers in an array', testStatisticMean);
	function testStatisticMean() {
		return NumbersStatistic::mean(array(0, 1, 2)) == 1;
	}