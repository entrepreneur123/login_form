<?php
$directors = [
'steven-spielberg' =>[
'ET',
'raider of lost ark',
'saving private rayn'],
'martin-socrates' =>[
'ashes and dimond',
'the river',
'the lion'
],
'felix-gary-gray' =>[
'men in black',
'the flat of faliur',
'law abiting citizen'
]
];
function processDirectorName($name){
       $nameParts = explode('-', $name);
       $firstname = ucfirst($nameParts[0]);
       $lastname = strtoupper($nameParts[1]);
       return "$firstname $lastname";
}
function processMovies($movies)
{
      $formattedStrings = [];
      for ($i = 0; $i < count($movies); $i++) {
           $formattedStrings[] = '"' . strtoupper($movies[$i]) . '"';
      }
return implode(",", $formattedStrings);
}
ksort($directors);
foreach ($directors as $key => $value) {
      echo processDirectorName($key) . ": ";
      echo processMovies($value);
      echo PHP_EOL;
}

?>