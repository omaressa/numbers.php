<?php
	test('subtraction should return the difference of items in an array', testBasicSubtraction01);
	function testBasicSubtraction01() {
		if(NumbersBasic::subtraction(array(5, 3, 1, -1)) != 2)
			return false;
		return true;
	}
	
	test('subtraction should throw an exception when given anything but an array', testBasicSubtraction02);
	function testBasicSubtraction02() {
		try {
			NumbersBasic::subtraction(1);
		}
		catch(Exception $e) {
			return $e->getMessage() == 'Input must be of type Array';
		}
		return false;
	}
	
	test('subtraction should throw an exception when given anything objects other than numbers', testBasicSubtraction03);
	function testBasicSubtraction03() {
		try {
			NumbersBasic::subtraction(array('test', 1, 1, 2));
		}
		catch(Exception $e) {
			return $e->getMessage() == 'All elements in array must be numbers';
		}
		return false;
	}