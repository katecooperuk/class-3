<?php

$timezone = date_default_timezone_set('Europe/London');
$timestamp = date('g:ia');
$time = date('G');



if ($time > 6 && $time < 9) {
	$background_color = '#0a63c2';
} 

else if ($time > 9 && $time < 17) {
	$background_color = '#64a2ea';
} 

else if ($time > 17 && $time < 20) {
	$background_color = '#0a63c2';
}

else {
	$background_color = '#0b2d55';
}

?>