<?php
$months = array();
for ($x = 1; $x <= 12; $x++) {
	$months[(string)$x] = date("F", mktime(0, 0, 0, $x, 1, 2016));
}
for ($y = 1; $y <= count($months); $y++) {
	echo $months[(string)$y] . "\n";
}
?>