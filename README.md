# Numbers.php
[Numbers.php](https://github.com/powder96/numbers.php/) - an advanced mathematics toolkit for PHP. It is a port of [Numbers.js](https://github.com/sjkaliski/numbers.js/) - same toolkit for JavaScript.

## Description

Numbers.php provides a comprehensive set of mathematical tools that currently are not offered in PHP.  These tools include:

* Basic calculations
* Calculus
* <s>Matrix Operations</s> - coming soon
* <s>Prime Numbers</s> - coming soon
* Statistics
* More...

A few things to note before using: PHP, like many languages, does not necessarily manage floating points as well as we'd all like it to. For example, if adding decimals, the addition tool won't return the exact value. This is an unfortunate error. Precautions have been made to account for this. After including numbers, you can set an error bound. Anything in this will be considered an "acceptable outcome."

The primary uses cases are calculations and data analysis on the server side. For client side operations, please use [Numbers.js](https://github.com/sjkaliski/numbers.js/).

## How to use

Numbers is pretty straightforward to use.

Simply require it:
```php
require_once('lib/numbers.php');
```

For example, if we wanted to estimate the integral of sin(x) from -2 to 4, we could:

Use riemann integrals (with 200 subdivisions)
```php
require_once('lib/numbers.php');

NumbersCalculus::riemann(sin, -2, 4, 200);
```

Or use adaptive simpson quadrature (with epsilon 0.0001)

```php
NumbersCalculus::adaptiveSimpson(sin, -2, 4, 0.0001);
```

User-defined functions can be used too:

```php
function myFunc(x) {
  return 2 * pow(x, 2) + 1;
}
NumbersCalculus::riemann(myFunc, -2, 4, 200);
NumbersCalculus::adaptiveSimpson(myFunc, -2, 4, 0.0001);
```

<!--
Now say we wanted to run some matrix calculations:

We can add two matrices

```javascript
var array1 = [0, 1, 2];
var array2 = [3, 4, 5];

numbers.matrix.addition(array1, array2);
```

We can transpose a matrix

```javascript
numbers.matrix.transpose(array);
```

Numbers also includes some basic prime number analysis.  We can check if a number is prime:

```javascript
//basic check
numbers.prime.simple(number);

//elliptic analysis (good for huge numbers)
numbers.prime.elliptic(number);
```
-->

The statistics tools include mean, median, mode, standard deviation, random sample generator, correlation, confidence intervals, t-test, chi-square, and more.

```php
NumbersStatistic::mean($array);
NumbersStatistic::median($array);
NumbersStatistic::mode($array);
NumbersStatistic::standardDev($array);
NumbersStatistic::randomSample($lower, $upper, $n);
NumbersStatistic::correlation($array1, $array2);
```

## Test

To test, open /test/index.php.

## Authors
* Steve Kaliski - [@sjkaliski](http://twitter.com/sjkaliski)
* David Byrd - [@davidbyrd11](http://twitter.com/davidbyrd11)
* Ethan Resnick - [@studip101](http://twitter.com/studip101)
* [Ethan aka `altercation`](https://github.com/altercation)
* [Hrishikesh Paranjape aka `hrishikeshparanjape`](https://github.com/hrishikeshparanjape)
* [Greg Leppert aka `leppert`](https://github.com/leppert)
* [Lars-Magnus Skog aka `ralphtheninja`](https://github.com/ralphtheninja)
* [Tim Wood aka `codearachnid`](https://github.com/codearachnid)
* [Miles McCrocklin aka `milroc`](https://github.com/milroc)
* [Nate Kohari aka `nkohari`](https://github.com/nkohari)
* [Eric LaForce aka `elaforc`](https://github.com/elaforc)
* [Kartik Talwar aka `KartikTalwar`](https://github.com/KartikTalwar)
* [btmills aka `btmills`](https://github.com/btmills)
* [swair shah aka `swairshah`](https://github.com/swairshah)
* [Jason Hutchinson aka `Zikes`](https://github.com/Zikes)
* [Philip I. Thomas aka `philipithomas`](https://github.com/philipithomas)
* [Brandon Benvie aka `Benvie`](https://github.com/Benvie)
* [Larry Battle aka `LarryBattle`](https://github.com/LarryBattle)
* [Powder96](https://github.com/powder96/)