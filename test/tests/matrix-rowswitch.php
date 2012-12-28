<?php
	test('rowSwitch should return a new matrix that has rows changed', 'testMatrixRowSwitch');
	function testMatrixRowSwitch() {
		$a = array(array( 0,  1,  2),
				   array( 3, -1,  5),
				   array( 1,  2,  5));
		$b = array(array( 3, -1,  5),
				   array( 0,  1,  2),
				   array( 1,  2,  5));
		return NumbersMatrix::rowSwitch($a, 0, 1) == $b;
	}