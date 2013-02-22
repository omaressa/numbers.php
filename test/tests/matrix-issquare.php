<?php
	test('isSquare should be able to tell if a matrix is square', 'testMatrixIsSquare');
	function testMatrixIsSquare() {
		if(!NumbersPHP\Matrix::isSquare(array(array(1, 2), array(3, 4))))
			return false;
		if(NumbersPHP\Matrix::isSquare(array(array(1, 2, 3), array(4, 5, 6))))
			return false;
		return true;
	}