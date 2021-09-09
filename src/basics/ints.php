<?php

/**
 * Integers
 */

$a = 0x1A;

var_dump((int)$a);

echo "<br>";

$b = 0b11111111;

var_dump((int) $b);


// As of PHP 7.4.0
$c = 1_234_567;
var_dump($c);

echo "<br>";
echo PHP_INT_SIZE;

echo "<br>";
var_dump (PHP_INT_MAX);

echo "<br>";
var_dump (PHP_INT_MIN);


echo "<br>";
// If the limit is increased from the max int limit then type will become float 
var_dump (PHP_INT_MAX +1);

echo "<br>";
// Similarly it will be float when it goes below the min limit
var_dump (PHP_INT_MIN -1);



/**
 * Floating points precision concerns
 */
echo "<br>";
var_dump (round((double) ( (0.1 + 0.7) * 10 ))); // output float(8)

echo "<br>";
var_dump (round((int) ( (0.1 + 0.7) * 10 ))); // output float(7)

