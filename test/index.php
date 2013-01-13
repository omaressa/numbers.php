<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://raw.github.com/twitter/bootstrap/070c125ceceb2a164773f51226950350445160ee/docs/assets/css/bootstrap.css" />
	</head>
	<body>
		<div class="container">
			<h1>Testing Numbers.php library</h1>
			<hr />
			<?php
				require_once('../lib/numbers.php');
				
				$testGroups[] = array(
					'Testing Standard Mathematics',
					'basic-sum',
					'basic-subtraction',
					'basic-product',
					'basic-square',
					'basic-binomial',
					'basic-factorial',
					'basic-gcd',
					'basic-lcm',
					'basic-random',
					'basic-shuffle',
					'basic-max',
					'basic-min',
					'basic-range',
					'basic-isint',
					'basic-divmod',
					'basic-powermod',
					'basic-egcd',
					'basic-modinverse',
					'basic-numbersequal'
				);
				
				$testGroups[] = array(
					'Testing Calculus Mathematics',
					'calculus-pointdiff',
					'calculus-riemann',
					'calculus-adaptivesimpson',
					'calculus-limit',
					'calculus-stirlinggamma',
					'calculus-lanczosgamma'
				);
				
				$testGroups[] = array(
					'Testing Complex Numbers',
					'complex-add',
					'complex-subtract',
					'complex-multiply',
					'complex-divide',
					'complex-magnitude',
					'complex-phase',
					'complex-conjugate',
					'complex-pow',
					'complex-complexpow',
					'complex-roots',
					'complex-sin',
					'complex-cos',
					'complex-tan',
					'complex-equals'
				);
				
				$testGroups[] = array(
					'Testing DSP Tools',
					'dsp-segment',
					'dsp-fft'
				);
				
				$testGroups[] = array(
					'Testing Matrix Mathematics',
					'matrix-deepcopy',
					'matrix-issquare',
					'matrix-addition',
					'matrix-scalar',
					'matrix-transpose',
					'matrix-identity',
					'matrix-dotproduct',
					'matrix-multiply',
					'matrix-determinant',
					'matrix-lupdecomposition',
					'matrix-rotate',
					'matrix-scale',
					'matrix-shear',
					'matrix-affine',
					'matrix-rowscale',
					'matrix-rowswitch',
					'matrix-rowaddmultiple'
				);
				
				$testGroups[] = array(
					'Testing Prime Number Mathematics',
					'prime-simple',
					'prime-factorization',
					'prime-millerrabin',
					'prime-sieve',
					'prime-coprime',
					'prime-getperfectpower',
					'prime-getprimepower'
				);
				
				$testGroups[] = array(
					'Testing Statistics Mathematics',
					'statistic-mean',
					'statistic-median',
					'statistic-mode',
					'statistic-quantile',
					'statistic-report',
					'statistic-randomsample',
					'statistic-standarddev',
					'statistic-correlation',
					'statistic-rsquared',
					'statistic-exponentialregression',
					'statistic-linearregression',
					'statistic-covariance'
				);
				
				$testGroups[] = array(
					'Testing Generators',
					'generators-fibonacci',
					'generators-collatz'
				);
				
				foreach($testGroups as $testGroup) {
					echo '<h2>' . $testGroup[0] . '</h2>';
					for($i = 1; $i < count($testGroup); ++$i)
						require('tests/' . $testGroup[$i] . '.php');
					echo '<br />';
				}
				
				function test($title, $testFunction) {
					if($testFunction())
						echo '<span class="label label-success">OK</span>';
					else
						echo '<span class="label label-important">FAIL</span>';
					echo ' ' . $title . '<br />';
				}
			?>
		</div>
	</body>
</html>