<?php
	test('powerMod should return the answer to a^b mod m', testBasicPowerMod);
	function testBasicPowerMod() {
		if(NumbersBasic::powerMod(1, -1, 5) != 1)
			return false;
		if(NumbersBasic::powerMod(2, 10, 3) != 1)
			return false;
		if(NumbersBasic::powerMod(2, pow(10, 9), 18) != 16)
			return false;
		if(NumbersBasic::powerMod(6, 0.5, 10) != 6)
			return false;
		if(NumbersBasic::powerMod(4, 13, 497) != 445)
			return false;
		return true;
	}