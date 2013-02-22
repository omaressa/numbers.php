<?php
	test('quantile should return lowest value in array for 0th q-quantile of an unsorted array', 'testStatisticQuantile01');
	function testStatisticQuantile01() {
		return NumbersPHP\Statistic::quantile(array(5, 2, 4), 0, 1) == 2;
	}
	
	test('quantile should return highest value in array for qth q-quantile of an unsorted array', 'testStatisticQuantile02');
	function testStatisticQuantile02() {
		return NumbersPHP\Statistic::quantile(array(5, 2, 4), 6, 6) == 5;
	}
	
	test('quantile should return average of two values in array for an unsorted array\'s length is a multiple of (k / q)', 'testStatisticQuantile03');
	function testStatisticQuantile03() {
		return NumbersPHP\Statistic::quantile(array(9, 1, 1, 9), 2, 4) == 5;
	}
	
	test('quantile should return value at 0-based index floor(k/q) in array for an unsorted array\'s length is not a multiple of (k/q)', 'testStatisticQuantile04');
	function testStatisticQuantile04() {
		return NumbersPHP\Statistic::quantile(array(3, 6, 7, 8, 8, 9, 10, 13, 15, 16, 20), 1, 4) == 7;
	}