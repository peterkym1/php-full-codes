<?php
loops:
//we use loops to execute a block of code again and again as long as a certain condition is true

//in PHP we have the following loop types:
//while -loops through a block of code as long as the specified condition is true
$count = 1;
//syntax
//while (condition){
//    code to execute
//}

while($count < 20){
    if($count ==0){
       echo   $count."IS NOT DIVISIBLE BY THREE<br>";
    }
    elseif($count %3 == 0){
        echo $count."DIVISIBLE BY THREE<br>";
    }else{
        echo $count."IS NOT DIVISIBLE BY THREE<br>";
    }
    $count ++;

//$count:initializes the loop counter and sets the start value
//$count <20:continue the loop as long as $count is less than 20
//$count ++:increases the loop counter value by one 1


//do...while - loops through a block of code once, and then repeats the loop as long as the specific
//syntax
//do{
// code to execute
//}while(condition is true)
//


//for - loops through a block of code a specified number of times
//syntax
//for(initial value;text value;increment value){
//    code to be executed
}
//initial value:Initialize the loop counter value:determines the strating of a loop
//test value:Evaluated for each loop iteration. If it evaluates to true, the loop continues
    //If it evaluates to FALSE,the loop  ends
//increment value: increases the loop counter value
//for each - loops through a block of code for each element in an array
for ($x = 0;$x < 10;$x++){
    echo "<span>value : $x</span> <br>";
}

//Assignment
//Using a for loop,loop from 0-100 if a number is a multiple of 3 echo "FIZZ".
//If a number is a multiple of 5 echo "BUZZ". If a number is a multiple of both 3 and 5
//echo "FIZZBUZZ". Otherwise echo the number
for ($x=0; $x<100;$x++)
    if($x==0){
        echo $x."NOT DIVISIBLE BY 3 OR 5<br>";
    }
    elseif($x %30==0){
        echo $x. "FIZZBUZZ<br>";
        }
    elseif( $x %3==0){
        echo $x. "FIZZ <br>";
    }
    elseif( $x %5==0){
        echo $x. "BUZZ <br>";
    }
    else{
        echo $x. "not divisible<br>";
    }

    //sol 1 to fizzbuzz
for ($x=0; $x <100; $x++)
//  $x :start of the loop
//  $x < 100: test condition
//  $x++ :increment value


//    sol 2 to fizzbuzz
for ($i =100; $i < 100; $i < 100 ) $i++;{
    if($i %3 ==0 and $i % 5 ==0){
        echo "$x FIZZBUZZ <br>";
    }elseif ($x % 3 ==0){
        echo "$x FIZZ <br>";
    }elseif ($X % 5 == 0){
        echo "$x BUZZ <br>";
    }else{
        echo "$x <br>";
    }

}
    ?>












