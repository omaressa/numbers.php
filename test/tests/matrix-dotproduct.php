<?php
	test('dotproduct should return dot product of two vectors', 'testMatrixDotproduct');
	function testMatrixDotproduct() {
		return NumbersMatrix::dotproduct(array(0, 1, 2, 3), array(-1, 2, 4, 6)) == 28;
	}