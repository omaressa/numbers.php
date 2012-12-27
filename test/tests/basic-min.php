<?php
	test('min should return the smallest number in an array', testBasicMin);
	function testBasicMin() {
		if(NumbersBasic::min(array(2, 1, 3, 42)) != 1)
			return false;
		return true;
	}