<?php

$hour = date('G');

if($hour > 20 || $hour < 6) {
	$color = 'black';
}
else {
	$color = 'blue';
}
?>