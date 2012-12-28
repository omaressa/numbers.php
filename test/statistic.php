<?php

	require_once('../lib/numbers.php');
	
	echo '<h1>Testing Statistics Mathematics</h1>';

	require('tests/statistic-mean.php');
	require('tests/statistic-median.php');
	require('tests/statistic-mode.php');
	require('tests/statistic-quantile.php');
	require('tests/statistic-report.php');
	require('tests/statistic-randomsample.php');
	require('tests/statistic-standarddev.php');
	require('tests/statistic-correlation.php');
	require('tests/statistic-rsquared.php');
	require('tests/statistic-exponentialregression.php');
	require('tests/statistic-linearregression.php');
	require('tests/statistic-covariance.php');
	
	function test($title, $testFunction) {
		if($testFunction())
			echo $title . ': OK<br />';
		else
			echo $title . ': FAILED<br />';
	}