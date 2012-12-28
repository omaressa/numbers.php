<?php
	test('phase should return phase', 'testComplexPhase');
	function testComplexPhase() {
		$a = new NumbersComplex(3, 4);
		return NumbersBasic::numbersEqual($a->phase(), 0.9272952180016122, Numbers::EPSILON);
	}