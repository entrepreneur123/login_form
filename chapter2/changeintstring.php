<?php
echo'<h3>change to string</h3>';
$number = 1234;
echo'<h3>before type conversion</h3>';
var_dump($number);
echo'</h3>after a type conversion</h3>';
$stringvalue = (string) ($number);
var_dump($stringvalue);
//php also provides a series of is_datatype() function
//is_array
//is_bool
//is_callable
//is_double
//is_float
//is_int
//is_integer
//is_iterable
//is_null
//is_long
//is_numeric
//is_object
//is_real
//is_iterable
//is_resources
//is_scalar
//is_string

?>