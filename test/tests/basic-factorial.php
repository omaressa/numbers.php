<?php
	test('factorial should return the product of n * (n - 1) * (n - 2) * ... * 1', 'testBasicFactorial');
	function testBasicFactorial() {
		if(NumbersBasic::factorial(4) != 24)
			return false;
		if(NumbersBasic::factorial(5) != 120)
			return false;
		return true;
	}