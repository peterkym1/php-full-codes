<?php
//Besides the Built-in PHP functions, it is possible to create your own functions.
//A function is a block of statements that can be used repeatedly in a program./does a specific function
//A function will not execute automatically when a page loads.
//A function will be executed by a call to the function
//syntax

//function function_name(){
//    code to execute ONLY WHEN THIS FUNCTION IS CALLED/USED
//}
function greetings(){
    echo 'Hello world';
}
// using a function/calling a function;USE THE FUNCTION NAME FOLLOWED BY PARENTHESIS
greetings();
echo '<br>';

function greetings1(){
    echo "chicken sharwarma";
}greetings1();
echo '<br>';
function greetings2($name,$age){
    echo"Hello".$name."<br>"."you are".$age."<br>";
}
greetings2( 'peter',18);
//greetings2( );//call these function with enough arguments
function greetings3($name="PHP",$country="kenya"){
    echo "I am a $name developer  from $country<br>";
}greetings3('java', "uk");

//functions that returns a value
function greetings4($name){
//    $get_name =$name;
    return $name;
}
$found_name = greetings4("john");
echo $found_name;
echo '<br>';
echo '<br>';

function areaofcircle($radius){
//    area => pie * r* r
    $pie = 3.412;
    $area =$pie *$radius *$radius;

    return $area;
}
$cr1 = 7;
$cr2 = 14;
$areaC1 = areaofcircle('cr1');
$areaC2 = areaofcircle('cr2');
echo $areaC1.'<br>';
echo $areaC2.'<br>';
echo '<br>';
echo '<br>';

//function that makes an array as an argument
function loopArray($array_name, $myforeach=true){
    if ($myforeach){
        //  FOREACH LOOP
        foreach($array_name as $item){
            echo "$item <br>";
        }
//        if true run foreach loop
    }else{
        // FOR LOOP
        $length =count ($array_name);
        for ($s = 0; $s < $length; $s ++){
            echo "$array_name[$s] <br>";
        }
//        if false run for loop
    }
//get the length of the array



}
$games = array("GTA","NFS","FIFA","PES","MORTAL COMBAT","JACK RYAN","ANGRY BIRDS","CANDY CRUSH");
loopArray($games);
loopArray($games, $myforeach=false);
echo '<br>';
echo '<br>';

Assignment:
//write a function that calculates the area of circle and  prints the results with unit of measurement chosen
//.this function should have options for unit of measurements.
function area($radius,$cm=true)
{
    $pie = 3.412;
    $area = $pie * $radius * $radius;
    if ($cm) {
//   area in cm
        echo "area is $area cm";
    } else {
//area in m
        echo "area is #area m <br>";
    }
    area_unit();
    area_unit();

    echo '<br>';
    echo '<br>';
}
?>






