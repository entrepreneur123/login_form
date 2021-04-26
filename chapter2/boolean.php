<?php
echo '<h3>Boolean to Int</h3>';
$truevaluebool = True;
$falsevaluebool = false;
echo'<h3>before typing conversion</h3>';
var_dump($truevaluebool);
echo'<br>';
var_dump($falsevaluebool);
echo'<h3>after typing conversion</h3>';
$truevalueint = (int) ($truevaluebool);
$falsevalueint = (int) ($falsevaluebool);
var_dump($truevaluint);
echo'</br>';
var_dump($falsevalueint);
?>