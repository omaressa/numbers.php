<?php

	require_once('../lib/numbers.php');
	
	echo '<h1>Testing Complex Numbers</h1>';

	require('tests/complex-add.php');
	require('tests/complex-subtract.php');
	require('tests/complex-multiply.php');
	require('tests/complex-divide.php');
	require('tests/complex-magnitude.php');
	require('tests/complex-phase.php');
	require('tests/complex-conjugate.php');
	require('tests/complex-pow.php');
	require('tests/complex-complexpow.php');
	require('tests/complex-roots.php');
	require('tests/complex-sin.php');
	require('tests/complex-cos.php');
	require('tests/complex-tan.php');
	require('tests/complex-equals.php');
	
	function test($title, $testFunction) {
		if($testFunction())
			echo $title . ': OK<br />';
		else
			echo $title . ': FAILED<br />';
	}