<?php
	test('Stirling approximation gamma should return correct values', 'testCalculusStirlingGamma');
	function testCalculusStirlingGamma() {
		if(NumbersPHP\Numbers::EPSILON <= 5.69718714897717 - NumbersCalculus::stirlingGamma(0.1))
			return false;
		if(NumbersPHP\Numbers::EPSILON <= 3.3259984240223925 - NumbersCalculus::stirlingGamma(0.2))
			return false;
		if(NumbersPHP\Numbers::EPSILON <= 2.3625300362696198 - NumbersCalculus::stirlingGamma(0.3))
			return false;
		if(NumbersPHP\Numbers::EPSILON <= 0.8426782594483921 - NumbersCalculus::stirlingGamma(1.3))
			return false;
		return true;
	}