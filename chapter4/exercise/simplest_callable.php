<?php
//simplest callable function
function foo()
{
	echo is_callable('foo') ? '"foo" is callable' : '"foo is not callable', PHP_EOL;
	//an anonymous function is callable;
}
if (True == is_callable( function () {})){
	echo 'anonymous function is callable';
}else{
	echo 'anonymous function is not callable';
}

?>