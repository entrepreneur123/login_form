<?php
$signal = ['red','green','blue'];
print_r($signal);
echo PHP_EOL;

$reversed = array_reverse($signal);

print_r($reversed);
echo PHP_EOL;

print_r($signal);
echo PHP_EOL;

$reversed = array_reverse($signal,$preserve_keys = true);
?>