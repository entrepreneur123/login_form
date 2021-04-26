<?php
// $basket = [
// 			["apple","orange","mango","guava"],
// 			["turnip","pa","ora","chilly"],
// 		];
// for($i = 0; $i < count($basket); $i++){
// 		for($j = 0; $j < count($basket [$i]); $j++){
// 		echo $basket[$i][$j] ;
// 	}
// }
$basket = [
           ["Mango", "Apple", "Banana", "Orange"],
           ["Burger", "Fries", "Sandwich", "Brownie", "Soda"]
        ];
for ($i = 0; $i < count($basket); $i++) {
        for ($j = 0; $j < count($basket [$i]); $j++) {
                  echo $basket[$i][$j]  . PHP_EOL;
       }
}
?>