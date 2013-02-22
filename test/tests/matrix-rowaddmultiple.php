<?php
	test('rowAddMultiple should return a new matrix that has a multiple of one row added to another', 'testMatrixRowAddMultiple');
	function testMatrixRowAddMultiple() {
		$a = array(array( 0,  1,  2),
				   array( 3, -1,  5),
				   array( 1,  2,  5));
		$b = array(array(0, 1, 2),
				   array(3, 1, 9),
				   array(1, 2, 5));
		return NumbersPHP\Matrix::rowAddMultiple($a, 0, 1, 2) == $b;
	}