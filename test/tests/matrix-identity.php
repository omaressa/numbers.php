<?php
	test('identity should return identity matrix of dimension n', 'testMatrixIdentity');
	function testMatrixIdentity() {
		$a = array(array(1, 0, 0),
				   array(0, 1, 0),
				   array(0, 0, 1));
		return NumbersPHP\Matrix::identity(3) == $a;
	}