<?php
	test('should be able to get all the roots of a complex number', testComplexRoots);
	function testComplexRoots() {
		$a = new NumbersComplex(3, -4);
		$root = 5;
		$roots = $a->roots($root);
		if(count($roots) != $root)
			return false;
		for($i = 0; $i < $root; ++$i)
			if(!$roots[$i]->pow($root)->equals($a, Numbers::EPSILON))
				return false;
		return true;
	}