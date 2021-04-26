<?php
$basket = [
			
			["apple","banana","cheery","mango"],
			["chauchau","pasta","tomato","guava"]
		];
foreach ($basket as $fooditems){
		foreach ($fooditems as $foods){
				echo $foods. PHP_EOL;
		}
}
?>