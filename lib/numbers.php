<?php
	/**
	 * Numbers.php
	 * http://github.com/powder96/numbers.php
	 *
	 * Licensed under the Apache License, Version 2.0 (the "License");
	 * you may not use this file except in compliance with the License.
	 * You may obtain a copy of the License at
	 *
	 * http://www.apache.org/licenses/LICENSE-2.0
	 *
	 * Unless required by applicable law or agreed to in writing, software
	 * distributed under the License is distributed on an "AS IS" BASIS,
	 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
	 * See the License for the specific language governing permissions and
	 * limitations under the License.
	 */
	
	// error_reporting(E_ALL);
	
	final class Numbers {
		/** 
		 * @constant {Number} EPSILON Epsilon (error bound) to be used 
		 * in calculations.
		 */
		const EPSILON = 0.001;
	}
	
	require_once('numbers/basic.php');
	require_once('numbers/calculus.php');
	require_once('numbers/complex.php');
	require_once('numbers/dsp.php');
	require_once('numbers/matrix.php');
	require_once('numbers/prime.php');
	require_once('numbers/statistic.php');
	require_once('numbers/generators.php');