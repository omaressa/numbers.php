<?php
	test('min should return the smallest number in an array', 'testBasicMin');
	function testBasicMin() {
		if(NumbersPHP\Basic::min(array(2, 1, 3, 42)) != 1)
			return false;
		return true;
	}