<?php
	test('gcd should return the greatest common denominator of two integers', testBasicGcd);
	function testBasicGcd() {
		if(NumbersBasic::gcd(1254, 5298) != 6)
			return false;
		if(NumbersBasic::gcd(78699786, 78978965) != 1)
			return false;
		return true;
	}