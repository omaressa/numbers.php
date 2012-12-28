<?php

	require_once('../lib/numbers.php');
	
	echo '<h1>Testing Generators</h1>';

	require('tests/generators-fibonacci.php');
	require('tests/generators-collatz.php');
	
	function test($title, $testFunction) {
		if($testFunction())
			echo $title . ': OK<br />';
		else
			echo $title . ': FAILED<br />';
	}