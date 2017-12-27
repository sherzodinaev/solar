<?php
/*

! Learn string concatenation, or interpolation, or string formatting.

Create 3 variables

$age = 33;
$name = "John";
$languages = array('English', 'Uzbek', 'Russian');


and create a function that produces below output

echo get_task001($age, $name, $languages);
> My name is John, I am 33 years old, and I speak following languages: English, Uzbek, Russian.
*/
<?php

$age = 33;
$name = "John";
$languages = array('English','Uzbek','Russian');

class foo 
{
	var $age;
	var $name;
	var $languages; 


	function__constructor()
	{
		$this->age = '33';
		$this->name = 'John'
		$this->languages = array ('English','Russian','Uzbek'); 
	}

}

echo<<'EOT' 
My name is $name, I am $age years old, and I speak following languages : $languages 
EOT;

echo index.php($age, $name, $languages);

?>

>