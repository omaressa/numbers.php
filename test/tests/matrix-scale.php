<?php
	test('scale should return a new vector that has been scaled by the transformation matrix', 'testMatrixScale01');
	function testMatrixScale01() {
		return NumbersMatrix::scale(array(array(2), array(5)), 10, 5) == array(array(20), array(25));
	}
	
	test('scale should throw an error if a vector larger than two is given for scaling', 'testMatrixScale02');
	function testMatrixScale02() {
		try {
			NumbersMatrix::scale(array(array(0), array(1), array(2)), 10, 5);
		}
		catch(Exception $e) {
			return $e->getMessage() == 'Only two dimensional operations are supported at this time';
		}
		return false;
	}