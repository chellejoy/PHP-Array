<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Arrays</title>
</head>
<body>
<h2>Weather Weather Lang</h2>

<?php

$weathercon=array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");

	print "We've seen all kinds of weather this month.". " At the beginning of the month, ". "we had \n". $weathercon[5]."\n"."and" ."\n". $weathercon[6] . ".\n" . "Then came" ."\n".$weathercon[1] . "\n" . "with a few " . $weathercon[2] . "\n" . "and some" . "\n".$weathercon[0] . ".\n" . " At least we didn't get any" . "\n".$weathercon[3] ."\n". "or" . "\n" .$weathercon[4]. ".";
?>