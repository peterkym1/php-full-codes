<?php
//php data types
//variables can store diff types of data, that do diff things
//php supports the following data types
//1.string
//2.Integers
//3.Float
//4.Boolean
//5.Arrays
//6.Objects
//7.Null
//8.Resources

//STRING
//A sequence of characters in double or single quote
//e.g "hello world", 'hello world'
//Rules that govern names for variables

//A variable starts with the $ sign, followed by the names of the variable
//A variable name must start with a letter or the underscore character
//A variable name cannot start with a number
//A variable name can only contain alpha-numeric characters and underscores(A-Z, 0-9)
//Variables names are case-sensitive($age and 4AGE ar two different variables)

$x = "php";
$y = "Kotin";
$Y = "Android";
var_dump($x);
var_dump($y);
var_dump($Y);
echo "<br>";
//what if you want to know how many characters makes up a string?use: strlen() function
//function:code that helps you do repetitive tasks
echo strlen($x);
echo "<br>";
echo strlen("peter kimani");
//count number of words in a string: str_word_count() function
echo str_word_count('I love coding in php');
$num_words =str_word_count('coding is awesome');
echo $num_words;
echo '<br>';
//search for a text within a string: strpos()
$position_for_word=strpos('hello world','world');
echo $position_for_word;
echo '<br>';
//replace text within a string:use str_replace()
echo str_replace('world','Dunia','hello world');

//integers
//Numbers that are non decimal
//must at least have one digit
$age = 21;
var_dump($age);
echo '<br>';

//Float
//is a number with a decimal point
$cup_volume =3.34;
var_dump($cup_volume);
echo '<br>';

//Boolean
$a = true;
$b = false;
echo '<br>';
echo 3 < 5;//returns 1;true
echo '<br>';
echo 3 > 5;//returns nothing on the browser,it means false
