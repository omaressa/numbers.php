<?php
	test('range should return an appropriate range for the given start, stop, and step parameters', 'testBasicRange');
	function testBasicRange() {
		if(NumbersPHP\Basic::range(1, 10) != array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10))
			return false;
		if(NumbersPHP\Basic::range(10, 1) != array(10, 9, 8, 7, 6, 5, 4, 3, 2, 1))
			return false;
		if(NumbersPHP\Basic::range(1, 5, 0.5) != array(1, 1.5, 2, 2.5, 3, 3.5, 4, 4.5, 5))
			return false;
		if(NumbersPHP\Basic::range(5, 1, 0.5) != array(5, 4.5, 4, 3.5, 3, 2.5, 2, 1.5, 1))
			return false;
		return true;
	}