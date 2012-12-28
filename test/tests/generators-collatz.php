<?php
	test('collatz should populate the given array with a collatz sequence', 'testGeneratorsCollatz');
	function testGeneratorsCollatz() {
		$result = array();
		NumbersGenerators::collatz(7, $result);
		return $result == array(7, 22, 11, 34, 17, 52, 26, 13, 40, 20, 10, 5, 16, 8, 4, 2, 1);
	}