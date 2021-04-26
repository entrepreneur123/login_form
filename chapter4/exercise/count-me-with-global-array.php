<?php
//we are in the global scope here
$count = 0;
function countMe(){
	//we enter the function scope here
	//$count is pulled from the global scope using the keyword global
	global $count;
	$count++;
}



?>