<?php
/*

# Task 001

Learn string concatenation, or interpolation, or string formatting.


Complete the function below
*/
function get_task001($age, $name, $languages)
{
	$result = '';
	$result = "My name is $name, I am $age years old, and I speak following languages: " . join(', ', $languages) . '.';
	return $result;
}