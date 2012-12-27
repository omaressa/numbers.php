<?php

	require_once('../lib/numbers.php');
	
	echo '<h1>Testing Standard Mathematics</h1>';

	require('tests/basic-sum.php');
	require('tests/basic-subtraction.php');
	require('tests/basic-product.php');
	require('tests/basic-square.php');
	require('tests/basic-binomial.php');
	require('tests/basic-factorial.php');
	require('tests/basic-gcd.php');
	require('tests/basic-lcm.php');
	require('tests/basic-random.php');
	require('tests/basic-shuffle.php');
	require('tests/basic-max.php');
	require('tests/basic-min.php');
	require('tests/basic-range.php');
	require('tests/basic-isint.php');
	require('tests/basic-divmod.php');
	require('tests/basic-powermod.php');
	require('tests/basic-egcd.php');
	require('tests/basic-modinverse.php');
	require('tests/basic-numbersequal.php');
	
	function test($title, $testFunction) {
		if($testFunction())
			echo $title . ': OK<br />';
		else
			echo $title . ': FAILED<br />';
	}