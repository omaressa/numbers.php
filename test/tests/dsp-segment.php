<?php
	test('segment should return a sample of the input array', 'testDSPSegment');
	function testDSPSegment() {
		return NumbersPHP\DSP::segment(array(1, 2, 3, 4, 5, 6, 7, 8, 9), 2, 3) == array(3, 6, 9);
	}