<?php
	test('square should return the square of a number', 'testBasicSquare');
	function testBasicSquare() {
		if(NumbersBasic::square(4) != 16)
			return false;
		return true;
	}