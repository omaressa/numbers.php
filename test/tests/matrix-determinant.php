<?php
	test('determinant should return determinant of matrix', 'testMatrixDeterminant01');
	function testMatrixDeterminant01() {
		$a = array(array(1));
		if(NumbersMatrix::determinant($a) != 1)
			return false;
		$b = array(array(2, 3),
				   array(6, 7));
		if(NumbersMatrix::determinant($b) != -4)
			return false;
		$c = array(array(0, 1, 2),
				   array(3, 4, 5),
				   array(6, 7, 8));
		if(NumbersMatrix::determinant($c) != 0)
			return false;
		return true;
	}
	
	test('determinant should throw an error for calculating the determinant of a non-square matrix', 'testMatrixDeterminant02');
	function testMatrixDeterminant02() {
		try {
			NumbersMatrix::determinant(array(array( 3, -7,  8,  9, -6),
											 array( 0,  2, -5,  7,  3),
											 array( 0,  0,  1,  5,  0),
											 array( 0,  0,  0, -2,  0)));
		}
		catch(Exception $e) {
			return $e->getMessage() == 'Not a square matrix';
		}
		return false;
	}