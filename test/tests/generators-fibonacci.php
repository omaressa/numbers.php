<?php
	test('fibonacci should generate the nth fibonacci number', 'testGeneratorsFibonacci');
	function testGeneratorsFibonacci() {
		if(NumbersGenerators::fibonacci(10) != 55)
			return false;
		if(NumbersGenerators::fibonacci(50) != 12586269025)
			return false;
		if(NumbersGenerators::fibonacci(79) != 14472334024676221)
			return false;
		return true;
	}