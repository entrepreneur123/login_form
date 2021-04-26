<!-- <?php
$professions = ["Doctor", "Teacher", "Programmer", "Lawyer", "Athlete"];
$subjects =  ["Mathematics", "Computer Programming", "Business English", "Graph Theory"];
      foreach ($professions as $profession) {
               echo "The Profession is $profession. " . PHP_EOL;
      }
?> -->
<!-- <?php
$professions = ["doctor","layers","nursese","teachers","pilot"];
$subjects = ["maths","statistic","economics","biology","etc"];
	foreach ($professions as $profession) {
			echo "the profession is $profession" .PHP_EOL;
			if ($profession == "teachers") {
				foreach ($subjects as $name) {
						echo "$name" . PHP_EOL;
				}
			}
	}

?> -->

<?php
$professions = ["Doctor", "Teacher", "Programmer", "Lawyer", "Athlete"];
$subjects =  ["Mathematics", "Computer Programming", "Business English", "Graph Theory"];
$totalSubjects = sizeof($subjects);
foreach ($professions as $profession) {
         echo "The Profession is $profession. " . PHP_EOL;     
         for ($i = 0; $profession === 'Teacher' && $i < $totalSubjects; $i++) {
                 echo " ". $subjects[$i] . PHP_EOL;
         }
}