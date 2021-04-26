<?php
$data = 2.25;
switch(gettype($data)){
	case 'integer':
	case 'double':
		echo 'the datatype is number';
		break;
	case 'boolean':
		echo "the datatype is boolean";
		break;
	case 'string':
		echo "the datatype is string";
		break;
	case 'array':
		echo "the datatype is array";
		break;
	default:
		echo "the datatype is unknown";
		break;
		
}

?>