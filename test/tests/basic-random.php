<?php
	test('random should return a specified quantity of elements from an array, at random', 'testBasicRandom01');
	function testBasicRandom01() {
		if(count(NumbersPHP\Basic::random(array(10, 20, 30, 40, 50, 60, 70), 5, true)) != 5)
			return false;
		return true;
	}
	
	test('random should return a specified quantity of elements from an array, at random w/o duplicates', 'testBasicRandom02');
	function testBasicRandom02() {
		if(count(NumbersPHP\Basic::random(array(10, 20, 30, 40, 50, 60, 70), 5, false)) != 5)
			return false;
		return true;
	}
	
	test('random should throw an exception when given an empty array', 'testBasicRandom03');
	function testBasicRandom03() {
		try {
			NumbersPHP\Basic::random(array(), 0, false);
		}
		catch(Exception $e) {
			return $e->getMessage() == 'Empty array';
		}
		return false;
	}
	
	test('random should throw an exception when quantity requested exceeds size of array', 'testBasicRandom04');
	function testBasicRandom04() {
		try {
			NumbersPHP\Basic::random(array(10, 20), 5, false);
		}
		catch(Exception $e) {
			return $e->getMessage() == 'Quantity requested exceeds size of array';
		}
		return false;
	}