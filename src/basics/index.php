<?php
# Scalar Types
$val1 = true;
$val2 = 1;
$val3 = 1.5;
$val4 = "1.5";
$val5 = `ls -la`;


echo gettype($val1) . " :: " . gettype($val2) . " :: " . gettype($val3) . " :: " . gettype($val4) . " :: " . gettype($val5);

# Code execution using backtiks
echo "<br>";
echo "<pre>$val5</pre>";

/**
 * Output
 * 
 * boolean :: integer :: double :: string :: string
 * total 12
 * drwxr-xr-x 2 1000 1000 4096 Sep  7 12:01 .
 * drwxr-xr-x 3 root root 4096 Sep  3 15:54 ..
 * -rw-r--r-- 1 1000 1000  290 Sep  7 13:25 index.php
 */


## Some tricks with booleans

$val1 = -0.1;
var_dump((bool)$val1);

echo "<br>";
$arr1 = [];
var_dump((bool)$arr1);

$arr2 = [];
var_dump((bool)$arr2);

echo "<br>";

$f = true;
$g = false;


$h = $f OR $g;
//$h = $f || $g;
var_dump($h);

echo "<br>";

var_dump(!0);