<?php
	test('affine should return a new vector that has been transformed by the affine transformation matrix', 'testMatrixAffine01');
	function testMatrixAffine01() {
		return NumbersPHP\Matrix::affine(array(array(2), array(5)), 10, 10) == array(array(12), array(15));
	}
	
	test('affine should throw an error if a vector larger than two is given for the affine transform', 'testMatrixAffine02');
	function testMatrixAffine02() {
		try {
			NumbersPHP\Matrix::affine(array(array(0), array(1), array(2)), 10, 10);
		}
		catch(Exception $e) {
			return $e->getMessage() == 'Only two dimensional operations are supported at this time';
		}
		return false;
	}