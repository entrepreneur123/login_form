<?php

$streets = [
	'wallbroke',
	'Mooragate',
	'crosswall',
	'lothbury',
];

sort($streets,SORT_STRING|SORT_FLAG_CASE);

print_r($streets);
?>