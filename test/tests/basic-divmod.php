<?php
	test('divMod should return an array of both the division and modulus values of two integers', 'testBasicDivMod');
	function testBasicDivMod() {
		if(NumbersPHP\Basic::divMod(12, 6) != array(2, 0))
			return false;
		if(NumbersPHP\Basic::divMod(10, 3) != array(3, 1))
			return false;
		return true;
	}