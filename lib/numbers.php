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
	
	define('NUMBERS_INCLUDE_PATH', realpath(dirname(__FILE__) . '/numbers'));
	
	require_once(NUMBERS_INCLUDE_PATH . '/basic.php');
	require_once(NUMBERS_INCLUDE_PATH . '/calculus.php');
	require_once(NUMBERS_INCLUDE_PATH . '/complex.php');
	require_once(NUMBERS_INCLUDE_PATH . '/dsp.php');
	require_once(NUMBERS_INCLUDE_PATH . '/matrix.php');
	require_once(NUMBERS_INCLUDE_PATH . '/prime.php');
	require_once(NUMBERS_INCLUDE_PATH . '/statistic.php');
	require_once(NUMBERS_INCLUDE_PATH . '/generators.php');