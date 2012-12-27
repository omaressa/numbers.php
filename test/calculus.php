<?php

	require_once('../lib/numbers.php');
	
	echo '<h1>Testing Calculus Mathematics</h1>';

	require('tests/calculus-pointdiff.php');
	require('tests/calculus-riemann.php');
	require('tests/calculus-adaptivesimpson.php');
	require('tests/calculus-limit.php');
	require('tests/calculus-stirlinggamma.php');
	require('tests/calculus-lanczosgamma.php');
	
	function test($title, $testFunction) {
		if($testFunction())
			echo $title . ': OK<br />';
		else
			echo $title . ': FAILED<br />';
	}