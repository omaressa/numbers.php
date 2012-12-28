<?php
	test('addition should return sum of two matrices', 'testMatrixAddition');
	function testMatrixAddition() {
		$a = array(array(0, 1, 2),
				   array(3, 4, 5));
		$b = array(array( 6,  7,  8),
				   array( 9, 10, 11));
		$c = array(array( 6,  8, 10),
				   array(12, 14, 16));
		return NumbersMatrix::addition($a, $b) == $c;
	}