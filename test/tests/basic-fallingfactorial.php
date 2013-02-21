<?php
	test('fallingFactorial should return correct answers', 'testBasicFallingFactorial');
	function testBasicFallingFactorial() {
		if(NumbersBasic::fallingFactorial(0, 0) != 1) // allows n = 0
			return false;
		if(NumbersBasic::fallingFactorial(7, 0) != 1) // k = 0 returns 1
			return false;
		if(NumbersBasic::fallingFactorial(2, 4) != 0) // nonsensical k returns 0
			return false;
		
		if(NumbersBasic::fallingFactorial(7, 7) != 5040) // n = k returns n!
			return false;
		if(NumbersBasic::fallingFactorial(7, 4) != 840)
			return false;
		
		try {
			NumbersBasic::fallingFactorial(-2, 5);
		}
		catch(Exception $e) {
			return $e->getMessage() == 'n cannot be negative';
		}
		return false;
	}