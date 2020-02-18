<?php
//php operators
//used to perform operations on variables and value
//php has the following operators
//1.Arithmetic operators
//2.Assignment ops
//3.Comparison ops
//4.logical ops

//Arithmetic oops
//+: Addition
$x =23;
$y =234;
$sum = $x + $y;
echo $sum.'<br>';
echo'The sum of 23 and 234 is',$sum.'<br>';
echo 23 +234;
echo '<br>';
//-: Subtraction
$x =234;
$y =23;
$sub = $x - $y;
echo $sub.'<br>';
echo'The sub of 23 and 234 is',$sub.'<br>';
echo 234 - 23;
echo '<br>';
//*Multiplication
$x =234;
$y =23;
$mult = $x * $y;
echo $mult.'<br>';
echo'The mult of 23 and 234 is',$mult.'<br>';
echo 234 * 23;
echo '<br>';
// /:Division
$x =234;
$y =23;
$div = $x / $y;
echo $div.'<br>';
echo'The div of 23 and 234 is',$div.'<br>';
echo 234 / 23;
echo '<br>';
//%:Modulus
$x =234;
$y =23;
$mod = $x % $y;
echo $mod.'<br>';
echo'The mod of 23 and 234 is',$mod.'<br>';
echo 234  % 23;
echo '<br>';
//**:Exponential
echo 2**3;

//2.Assignment ops
//used to write a value to a variable
$car = 'Benz';
$i = 12;
$f = 12.12;
//Assignment ops with other arithmetic ops
$s =30;
$sum =$i +$s;
$i =$i +$s;
echo $i;
echo '<br>';
$a =100;
$b =200;
$a +=100;
echo $a;
echo '<br>';
$a =100;
$b =200;
$a -=100;
echo $a;
echo '<br>';
$a =100;
$b =200;
$a *=100;
echo $a;
echo '<br>';
$a =100;
$b =200;
$a /=100;
echo $a;
echo '<br>';
$a =100;
$b =200;
$a %=100;
echo $a;
echo '<br>';
$a =100;
$b =200;
$a **=100;
echo $a;
echo '<br>';

//3.comparison ops
//Used to compare values
//comparison ops return a boolean data types:true, false
//1. ==(equal)
echo '<br>';
$s = 2;
$t = 3;
$j = 2;
$answer = $s ==$t;
var_dump($answer);
echo '<br>';
$db_username = 'johndoe';
$db_password = 'ekapassword';
//data from user
$user_username = 'mikedoe';
$user_password = '1234pass';

$check =$user_username ==$user_username;
var_dump($check);
echo '<br>';
//2. ===; Identical : returns true if one variable is equal to another variable and those two variables are of the same data type
//variables are of the same datatype
$check = $db_password === $user_password;
var_dump($check);
echo '<br>';
//3. != :not equal to:return true if two variables are not equal
$check = $db_username != $user_username;
var_dump($check);
echo '<br>';
//4. !==: not identical: returns true if two variables are not identical
$check = $db_username != $user_username;
var_dump($check);
echo '<br>';
//5. > :Greater than: return true if a value is greater than the other value
$myname = 'Peter The Dev';
$yourname = 'John Graham Doe';
$result =strlen($myname) > strlen($yourname);
var_dump($result);
echo '<br>';
//6. > :less than: return true if a value is greater than the other value
$myname = 'Peter The Dev';
$yourname = 'John Graham Doe';
$result =strlen($myname) < strlen($yourname);
var_dump($result);
echo '<br>';
//7. > :Greater than or equals to: return true if a value is greater than the other value
$myname = 'Peter The Dev';
$yourname = 'John Graham Doe';
$result =strlen($myname) >= strlen($yourname);
var_dump($result);
echo '<br>';
//8. > :less than or equals to: return true if a value is greater than the other value
$myname = 'Peter The Dev';
$yourname = 'John Graham Doe';
$result =strlen($myname) <= strlen($yourname);
var_dump($result);
echo '<br>';

//4.logical ops
//used to combine conditional statements
//1. and :returns true if two operations are true
$x = 100;
$y = 200;
if($x ==100 and $y == 200){
    echo '<h1>it is true $x is equal to 100 and $y is equal 200</h1>';
}
//2. or :returns true if either one of two operation is true
$x = 100;
$y = 200;
if($x == 300 or $y != $x){
    echo '<h1>it is true $x is equal to 100 and $y is  not equal 100</h1>';
}
if($x == 300 || $y != $x){
    echo '<h1>it is true $x is equal to 100 and $y is  not equal 100</h1>';
}
//3. ! not :return true if a variable is false
$check=!($x == 100 and $y == 200);
var_dump($check);








?>