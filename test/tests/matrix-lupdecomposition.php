<?php
	test('lupDecomposition should throw an error if trying to get LU decomposition of non-square matrix', 'testMatrixLupDecomposition01');
	function testMatrixLupDecomposition01() {
		try {
			NumbersMatrix::lupDecomposition(array(array(1, 2, 3), array(4, 5, 6)));
		}
		catch(Exception $e) {
			return $e->getMessage() == 'Matrix must be square';
		}
		return false;
	}
	
	test('lupDecomposition should return the LU decomposition of a matrix', 'testMatrixLupDecomposition02');
	function testMatrixLupDecomposition02() {
		$a = array(array( 1,  0,  0,  2),
				   array( 2, -2,  0,  5),
				   array( 1, -2, -2,  3),
				   array( 5, -3, -5,  2));
		$b = array(array( 1,  0,  0,  2),
				   array( 1, -2,  0,  5),
				   array( 1, -2,  0,  3),
				   array( 1, -3, -5,  0));
		$lupA = NumbersMatrix::lupDecomposition($a);
		if(NumbersMatrix::multiply($lupA[0], $lupA[1]) != NumbersMatrix::multiply($lupA[2], $a))
			return false;
		$lupB = NumbersMatrix::lupDecomposition($b);
		if(NumbersMatrix::multiply($lupB[0], $lupB[1]) != NumbersMatrix::multiply($lupB[2], $b))
			return false;
		return true;
	}