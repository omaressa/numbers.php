<?php
	test('coprime should determine if two integers are coprime or not', 'testPrimeCoprime');
	function testPrimeCoprime() {
		if(!NumbersPrime::coprime(3, 4))
			return false;
		if(!NumbersPrime::coprime(48, 65))
			return false;
		if(NumbersPrime::coprime(48, 64))
			return false;
		return true;
	}