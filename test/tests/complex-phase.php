<?php
	test('phase should return phase', 'testComplexPhase');
	function testComplexPhase() {
		$a = new NumbersPHP\Complex(3, 4);
		return NumbersPHP\Basic::numbersEqual($a->phase(), 0.9272952180016122, NumbersPHP\Numbers::EPSILON);
	}