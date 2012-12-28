<?php
	test('shear should return a new vector that has been sheared in the x direction by the transformation matrix', 'testMatrixShear01');
	function testMatrixShear01() {
		return NumbersMatrix::shear(array(array(2), array(5)), 10, 'xaxis') == array(array(52), array(5));
	}
	
	test('shear should return a new vector that has been sheared in the y direction by the transformation matrix', 'testMatrixShear02');
	function testMatrixShear02() {
		return NumbersMatrix::shear(array(array(2), array(5)), 10, 'yaxis') == array(array(2), array(25));
	}
	
	test('shear should throw an error if a vector larger than two is given for shearing', 'testMatrixShear03');
	function testMatrixShear03() {
		try {
			NumbersMatrix::shear(array(array(0), array(1), array(2)), 10, 'yaxis');
		}
		catch(Exception $e) {
			return $e->getMessage() == 'Only two dimensional operations are supported at this time';
		}
		return false;
	}