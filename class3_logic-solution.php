<?php

$hour = date('G');

if($hour > 20 || $hour < 6) {
	$class = 'night';
}
else {
	$class = 'day';
}
?>