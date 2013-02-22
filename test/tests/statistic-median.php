<?php
	test('median should return middle value in array for a sorted array with an odd number of values', 'testStatisticMedian01');
	function testStatisticMedian01() {
		return NumbersPHP\Statistic::median(array(0, 2, 15)) == 2;
	}
	
	test('median should return middle value in array for an unsorted array with an odd number of values', 'testStatisticMedian02');
	function testStatisticMedian02() {
		return NumbersPHP\Statistic::median(array(1, 0, 2)) == 1;
	}
	
	test('median should return average of two middle values in array for a sorted array with an even number of values', 'testStatisticMedian03');
	function testStatisticMedian03() {
		return NumbersPHP\Statistic::median(array(0, 1, 2, 3)) == 1.5;
	}
	
	test('median should return average of two middle values in array for an unsorted array with an even number of values', 'testStatisticMedian04');
	function testStatisticMedian04() {
		return NumbersPHP\Statistic::median(array(1, 3, 2, 0)) == 1.5;
	}