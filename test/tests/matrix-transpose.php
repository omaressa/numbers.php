<?php
	test('transpose should return transposed matrix', 'testMatrixTranspose');
	function testMatrixTranspose() {
		$a = array(array(0, 1, 2),
				   array(3, 4, 5));
		$b = array(array(0, 3),
				   array(1, 4),
				   array(2, 5));
		return NumbersMatrix::transpose($a) == $b;
	}