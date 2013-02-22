<?php
	test('rowScale should return a new matrix that has a scaled row', 'testMatrixRowScale');
	function testMatrixRowScale() {
		$a = array(array( 0,  1,  2),
				   array( 3, -1,  5),
				   array( 1,  2,  5));
		$b = array(array( 0,  0,  0),
				   array( 3, -1,  5),
				   array( 1,  2,  5));
		$c = array(array(  0,   1,   2),
				   array( -6,   2, -10),
				   array(  1,   2,   5));
		if(NumbersPHP\Matrix::rowScale($a, 0, 0) != $b)
			return false;
		if(NumbersPHP\Matrix::rowScale($a, 1, -2) != $c)
			return false;
		if(NumbersPHP\Matrix::rowScale($a, 1, 1) != $a)
			return false;
		return true;
	}