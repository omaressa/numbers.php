<?php
	test('lcm should return the least common multiple of two integers', 'testBasicLcm');
	function testBasicLcm() {
		if(NumbersBasic::lcm(12, 80) != 240)
			return false;
		return true;
	}