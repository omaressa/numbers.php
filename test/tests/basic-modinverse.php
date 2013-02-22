<?php
	test('modInverse will return the modulo m inverse of a', 'testBasicModInverse01');
	function testBasicModInverse01() {
		if(NumbersPHP\Basic::modInverse(1, 5) != 1)
			return false;
		return true;
	}
	
	test('modInverse will throw an exception if no modular inverse exists', 'testBasicModInverse02');
	function testBasicModInverse02() {
		try {
			NumbersPHP\Basic::modInverse(65, 40);
		}
		catch(Exception $e) {
			return $e->getMessage() == 'No modular inverse exists';
		}
		return false;
	}