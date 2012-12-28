<?php
	test('isInt checks for an integer', 'testBasicIsInt');
	function testBasicIsInt() {
		if(NumbersBasic::isInt(2.32))
			return false;
		if(NumbersBasic::isInt('true'))
			return false;
		if(!NumbersBasic::isInt('2'))
			return false;
		if(!NumbersBasic::isInt(2))
			return false;
		return true;
	}