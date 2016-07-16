<?php

//use javascript to get timezone offset
//var offset = (new Date().getTimezoneOffset()/60)*(-1);
$offset = -4; //America/New_York
$seconds = $offset * 60 * 60;
// Get timezone name from seconds
$client_timezone = timezone_name_from_abbr('', $seconds, 1);
if($client_timezone === false){
	$client_timezone = timezone_name_from_abbr('', $seconds, 0);
}
$date = '2016-7-12 16:22:10';
$dateTime = new DateTime ($date, new DateTimeZone($client_timezone));
$dateTime->setTimezone(new DateTimeZone('UTC'));
echo $dateTime->format('Y-m-d H:i:s');