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
				
				$testGroups['basic'] = 'Testing Standard Mathematics';
				$testGroups['calculus'] = 'Testing Calculus Mathematics';
				$testGroups['complex'] = 'Testing Complex Numbers';
				$testGroups['dsp'] = 'Testing DSP Tools';
				$testGroups['matrix'] = 'Testing Matrix Mathematics';
				$testGroups['prime'] = 'Testing Prime Number Mathematics';
				$testGroups['statistic'] = 'Testing Statistics Mathematics';
				$testGroups['generators'] = 'Testing Generators';

				foreach($testGroups as $testGroupId => $testGroupTitle) {
					echo '<h2>' . $testGroupTitle . '</h2>';
					$testGroupFiles = glob(dirname(__FILE__) . '/tests/' . $testGroupId . '-*.php');
					foreach($testGroupFiles as $testFile)
						require($testFile);
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