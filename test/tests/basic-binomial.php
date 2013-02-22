<?php

	test('binomial should return the binomial coefficient (n choose k) of two numbers', 'testBasicBinomial');
	function testBasicBinomial() {
		if(NumbersPHP\Basic::binomial(5, 3) != 10)
			return false;
		return true;
	}