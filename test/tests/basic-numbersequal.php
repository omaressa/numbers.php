<?php
	test('numbersEqual should be able to check equality of two floating point numbers', testBasicNumbersEqual);
	function testBasicNumbersEqual() {
		if(!NumbersBasic::numbersEqual(5, 5, Numbers::EPSILON))
			return false;
		if(!NumbersBasic::numbersEqual(5.0001, 5.0000001, Numbers::EPSILON))
			return false;
		if(NumbersBasic::numbersEqual(-5, 5, Numbers::EPSILON))
			return false;
		if(NumbersBasic::numbersEqual(5, 5.1, Numbers::EPSILON))
			return false;
		if(NumbersBasic::numbersEqual(5, 5.001, Numbers::EPSILON))
			return false;
		return true;
	}