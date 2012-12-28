<?php

	require_once('../lib/numbers.php');
	
	echo '<h1>Testing DSP Tools</h1>';

	require('tests/dsp-segment.php');
	require('tests/dsp-fft.php');
	
	function test($title, $testFunction) {
		if($testFunction())
			echo $title . ': OK<br />';
		else
			echo $title . ': FAILED<br />';
	}