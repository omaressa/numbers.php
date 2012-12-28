<?php
	test('Lanczos approximation gamma should return correct values', 'testCalculusLanczosGamma');
	function testCalculusLanczosGamma() {
		if(Numbers::EPSILON <= 9.513507698668736 - NumbersCalculus::lanczosGamma(0.1))
			return false;
		if(Numbers::EPSILON <= 4.590843711998803 - NumbersCalculus::lanczosGamma(0.2))
			return false;
		if(Numbers::EPSILON <= 2.9915689876875904 - NumbersCalculus::lanczosGamma(0.3))
			return false;
		if(Numbers::EPSILON <= 0.8974706963062777 - NumbersCalculus::lanczosGamma(1.3))
			return false;
		return true;
	}