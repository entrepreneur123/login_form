<?php
$str = "your order total is:";
$order = 20;
$additional = 5;
$orderTotal = 0;
$complete = false;
//add additional items to the order
$orderTotal = $order +$additional;
//if order is greater then 25
if($orderTotal >= 25){
	$complete = true;
	echo $str.$orderTotal;
}
?>