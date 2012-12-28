<?php
	test('scalar should returned scaled matrix', 'testMatrixScalar');
	function testMatrixScalar() {
		$a = array(array(0, 1, 2),
				   array(3, 4, 5));
		$b = 5;
		$c = array(array( 0,  5, 10),
				   array(15, 20, 25));
		return NumbersMatrix::scalar($a, $b) == $c;
	}