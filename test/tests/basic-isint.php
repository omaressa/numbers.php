<?php
	test('isInt checks for an integer', 'testBasicIsInt');
	function testBasicIsInt() {
		if(NumbersPHP\Basic::isInt(2.32))
			return false;
		if(NumbersPHP\Basic::isInt('true'))
			return false;
		if(!NumbersPHP\Basic::isInt('2'))
			return false;
		if(!NumbersPHP\Basic::isInt(2))
			return false;
		return true;
	}