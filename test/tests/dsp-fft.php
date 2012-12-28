<?php
	test('fft should return fourier transform of input array', 'testDSPFFT');
	function testDSPFFT() {
		$result = NumbersDSP::fft(array(1, 1, 1, 1, 0, 0, 0, 0));
		if(!$result[0]->equals(new NumbersComplex(4, 0), Numbers::EPSILON))
			return false;
		if($result[2]->equals(new NumbersComplex(1, -1), Numbers::EPSILON))
			return false;
		if(!$result[4]->equals(new NumbersComplex(4, 0), Numbers::EPSILON))
			return false;
		return true;
	}