<?php
	test('riemann should return an estimated definite integral of a function', 'testCalculusRiemann');
	function testCalculusRiemann() {
		return (NumbersPHP\Calculus::riemann('testCalculusRiemannTestFunc', 0, 100, 10) == 570000);
	}
	function testCalculusRiemannTestFunc($x) {
		return 2 * $x * $x;
	}