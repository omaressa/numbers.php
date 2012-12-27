<?php
	test('random should return a specified quantity of elements from an array, at random', testBasicRandom01);
	function testBasicRandom01() {
		mt_srand(0);
		if(NumbersBasic::random(array(10, 20, 30, 40, 50, 60, 70), 5, true) != array(40, 50, 60, 20, 50))
			return false;
		return true;
	}
	
	test('random should return a specified quantity of elements from an array, at random w/o duplicates', testBasicRandom02);
	function testBasicRandom02() {
		mt_srand(0);
		if(NumbersBasic::random(array(10, 20, 30, 40, 50, 60, 70), 5, false) != array(50, 30, 20, 10, 60))
			return false;
		return true;
	}
	
	test('random should throw an exception when given an empty array', testBasicRandom03);
	function testBasicRandom03() {
		try {
			NumbersBasic::random(array(), 0, false);
		}
		catch(Exception $e) {
			return $e->getMessage() == 'Empty array';
		}
		return false;
	}
	
	test('random should throw an exception when quantity requested exceeds size of array', testBasicRandom04);
	function testBasicRandom04() {
		try {
			NumbersBasic::random(array(10, 20), 5, false);
		}
		catch(Exception $e) {
			return $e->getMessage() == 'Quantity requested exceeds size of array';
		}
		return false;
	}