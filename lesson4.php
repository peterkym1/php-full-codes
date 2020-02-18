<?php
//conditional statements are used to perform different actions based on different conditions.
//To allow your code to perform diff actions based on diff variables.
//Php has the following conditional statements
//
//1.if statement -executes soe code if one condition is true
//2.if...else statement -executes some code if a condition is true and another code if that condition is true
//3.if...elseif..else statement -executes different codes for more than two conditions
//switch statement - selects one of many blocks of codes to be executed

//if (condition to examine){
//    code to be executed if condition is true
//}
$db_first_name = 'john doe';
$user_first_name = 'john doe';
if ($user_first_name == $db_first_name){
    echo '<p>Credentials matched . You can login...</p>';
    }
$age = 15;
if ($age < 18){
        echo "<h1>you cannot take alcohol..go home and study hard</h1>";
}else{
    echo "<h1>Hurray, you are old enough,grab a crate</h1>";
}
//3.if...elseif...else statement executes different codes for more than two conditions
//if (condition to examine){
//    code to be executed if condition is TRUE
//}elseif(condition){
//    code to be executed if the 1st condition is false,and this condition is true
//}elseif(condition){
//    code to be executed if the 2nd condition is false,and this condition is true
//}else{
//    code to be executed if all conditions are false
//}
$age =19;
$kenyan = false;

if ($age < 18){
    echo "<h1>you cannot take alcohol..go home and study hard</h1>";
}elseif($kenyan==true){
    echo "<h1>Hurray, you are old enough,grab a crate</h1>";
}else{
    echo '<h3>you are under age and not kenyan,you are kidding!!!</h3>';
}
//Assignment :
//1.using an conditional statement ,check if 100 is a multiple of 2;
//if true echo "100 is a multiple of 2"else echo"100 is not a multiple of 2"
//write code that calculates the volume of a cylinder of height 14 and diameter 14
//echo "This is the cylinder to use if the volume is greater than 10"
$value = 100;
$divisor = 2;
$answer = $value%$divisor;
if ($answer ==0){
     echo "<h1>100 is a multiple of 2</h1>";
}else{
     echo '<h1>100 is not a multiple of 2</h1>';
}

 $h = 14;
 $w = 14;
 $r =14;
 $v = 3.412*$r*$h*$w;

 if($v >10){
     echo "<h1>This is the cylinder to use if the volume is greater than 10";
 }
 //switch statement - selects one of many blocks of code to be executed
//switch syntax
//switch (n){
//    case label1:
//        code to execute if n = label1
//    break
//     case label2:
//         code to execute if n = label2
//     break
//      case label3:
//          code to execute if n = label3
//      break
//       case label4:
//           code to execute if n = label4
//       break
//
//    default:
//        code to be executed
//}
$favteam ="dream league";
 switch ($favteam){
     case "galatasaray";
        echo '<p style="color: green">galatasaray at position 5</p>';
        break;
        case "supastrika";
        echo '<p style="color: blue">supastrika at position 4</p>';
        break;
   case "watford";
        echo '<p style="color:yellow">watford at position 3</p>';
        break;
    default: '<p style ="color: red">none of the above is my favourite team</p>';
 }