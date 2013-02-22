<?php
	test('sum should return the sum of items in an array', 'testBasicSum01');
	function testBasicSum01() {
		if(NumbersPHP\Basic::sum(array(0, 1, 2, 3)) != 6)
			return false;
		if(NumbersPHP\Basic::sum(array(0, -3, 5, -2)) != 0)
			return false;
		return true;
	}
	
	test('sum should throw an exception when given anything but an array', 'testBasicSum02');
	function testBasicSum02() {
		try {
			NumbersPHP\Basic::sum(1);
		}
		catch(Exception $e) {
			return $e->getMessage() == 'Input must be of type Array';
		}
		return false;
	}
	
	test('sum should throw an exception when given anything objects other than numbers', 'testBasicSum03');
	function testBasicSum03() {
		try {
			NumbersPHP\Basic::sum(array(1, 2, 'error'));
		}
		catch(Exception $e) {
			return $e->getMessage() == 'All elements in array must be numbers';
		}
		return false;
	}