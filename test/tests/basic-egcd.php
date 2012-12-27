<?php
	test('egcd should return the array [a, x, y] which is the solved linear equation for GCD', testBasicEgcd);
	function testBasicEgcd() {
		if(NumbersBasic::egcd(65, 40) != array(5, -3, 5))
			return false;
		if(NumbersBasic::egcd(40, 65) != array(5, 5, -3))
			return false;
		if(NumbersBasic::egcd(1239, 735) != array(21, -16, 27))
			return false;
		if(NumbersBasic::egcd(105, 252) != array(21, 5, -2))
			return false;
		if(NumbersBasic::egcd(252, 105) != array(21, -2, 5))
			return false;
		return true;
	}