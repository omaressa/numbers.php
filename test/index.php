<?php
	require_once('../lib/numbers.php');
	
	function test($title, $testFunction) {
		if($testFunction())
			echo $title . ': OK<br />';
		else
			echo '<strong style="color: red;">' . $title . ': FAILED</strong><br />';
	}
	
	echo '<h1>Testing Numbers.php library</h1>';
	
	echo '<h2>Testing Standard Mathematics</h2>';
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
	
	echo '<h2>Testing Calculus Mathematics</h2>';
	require('tests/calculus-pointdiff.php');
	require('tests/calculus-riemann.php');
	require('tests/calculus-adaptivesimpson.php');
	require('tests/calculus-limit.php');
	require('tests/calculus-stirlinggamma.php');
	require('tests/calculus-lanczosgamma.php');
	
	echo '<h2>Testing Complex Numbers</h2>';
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
	
	echo '<h2>Testing DSP Tools</h2>';
	require('tests/dsp-segment.php');
	require('tests/dsp-fft.php');
	
	echo '<h2>Testing Matrix Mathematics</h2>';
	require('tests/matrix-deepcopy.php');
	require('tests/matrix-issquare.php');
	require('tests/matrix-addition.php');
	require('tests/matrix-scalar.php');
	require('tests/matrix-transpose.php');
	require('tests/matrix-identity.php');
	require('tests/matrix-dotproduct.php');
	require('tests/matrix-multiply.php');
	require('tests/matrix-determinant.php');
	require('tests/matrix-lupdecomposition.php');
	require('tests/matrix-rotate.php');
	require('tests/matrix-scale.php');
	require('tests/matrix-shear.php');
	require('tests/matrix-affine.php');
	require('tests/matrix-rowscale.php');
	require('tests/matrix-rowswitch.php');
	require('tests/matrix-rowaddmultiple.php');
	
	echo '<h2>Testing Prime Number Mathematics</h2>';
	require('tests/prime-simple.php');
	require('tests/prime-factorization.php');
	require('tests/prime-millerrabin.php');
	require('tests/prime-sieve.php');
	require('tests/prime-coprime.php');
	require('tests/prime-getperfectpower.php');
	require('tests/prime-getprimepower.php');
	
	echo '<h2>Testing Statistics Mathematics</h2>';
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
	
	echo '<h2>Testing Generators</h2>';
	require('tests/generators-fibonacci.php');
	require('tests/generators-collatz.php');