<?php
	test('multiply should return product of two matrices', 'testMatrixMultiply01');
	function testMatrixMultiply01() {
		$a = array(array(0, 1, 2),
				   array(3, 4, 5));
		$b = array(array(0, 3),
				   array(1, 4),
				   array(2, 5));
		$c = array(array( 5, 14),
				   array(14, 50));
		return NumbersPHP\Matrix::multiply($a, $b) == $c;
	}
	
	test('multiply should return product of matrix and a vector', 'testMatrixMultiply02');
	function testMatrixMultiply02() {
		$a = array(array(0, 1, 2),
				   array(3, 4, 5));
		$b = array(array(0),
				   array(1),
				   array(2));
		$c = array(array( 5),
				   array(14));
		return NumbersPHP\Matrix::multiply($a, $b) == $c;
	}