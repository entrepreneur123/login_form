<?php
//get all the arguments
$name = $argv[1];
$heightmeters = (int) $argv[2];
$heightcentemeters = (int) $args[3];
//convert centimeter to meter
$cmtometer = (float) ($heightcentemeters/100);
$finalheightinmeter = $heightmeters + $cmtometer;
//display the output



?>