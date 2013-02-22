<?php
	test('fft should return fourier transform of input array', 'testDSPFFT');
	function testDSPFFT() {
		$result = NumbersPHP\DSP::fft(array(1, 1, 1, 1, 0, 0, 0, 0));
		if(!$result[0]->equals(new NumbersPHP\Complex(4, 0), NumbersPHP\Numbers::EPSILON))
			return false;
		if($result[2]->equals(new NumbersPHP\Complex(1, -1), NumbersPHP\Numbers::EPSILON))
			return false;
		if(!$result[4]->equals(new NumbersPHP\Complex(4, 0), NumbersPHP\Numbers::EPSILON))
			return false;
		return true;
	}