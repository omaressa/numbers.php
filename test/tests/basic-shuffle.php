<?php
	test('shuffle should return a mixed version of an array', 'testBasicShuffle');
	function testBasicShuffle() {
		mt_srand(0);
		if(NumbersBasic::shuffle(array(10, 20, 30, 40, 50, 60, 70)) != array(50, 30, 20, 10, 60, 70, 40))
			return false;
		return true;
	}