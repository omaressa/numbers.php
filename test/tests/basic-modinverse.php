<?php
	test('modInverse will return the modulo m inverse of a', 'testBasicModInverse01');
	function testBasicModInverse01() {
		if(NumbersBasic::modInverse(1, 5) != 1)
			return false;
		return true;
	}
	
	test('modInverse will throw an exception if no modular inverse exists', 'testBasicModInverse02');
	function testBasicModInverse02() {
		try {
			NumbersBasic::modInverse(65, 40);
		}
		catch(Exception $e) {
			return $e->getMessage() == 'No modular inverse exists';
		}
		return false;
	}