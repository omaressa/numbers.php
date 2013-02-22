<?php
	test('shuffle should return a different version of input array', 'testBasicShuffle');
	function testBasicShuffle() {
		$array = array(10, 20, 30, 40, 50, 60, 70);
		if(NumbersPHP\Basic::shuffle($array) == $array)
			return false;
		return true;
	}