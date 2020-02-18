<?php
//An array stores multiple values in one single variable:
//An array is a special variable,which can hold more than ne value at a time.
$fruit1 = 'mango';
$fruit2 = 'apple';
$fruit3 = 'avocado';
$fruit4 = 'pineapple';
$fruit5 = 'water mellon';
$fruit6 = 'guava';
$fruit7 = 'orange';
//create an array in PHP
//In php, the array() function is used to create an array
$fruits = array('mango','water mellon','orange','Apple','Avocado','Pineapple','Guava');
//echo $fruits
//count number of items in an array: use count( function)
$num_items = count($fruits);
echo $num_items. '<br>';

//Accessing array items:use square bracket with index number inside
echo $fruits[0]. '<br>';
echo $fruits[1]. '<br>';
echo $fruits[2]. '<br>';
echo $fruits[3]. '<br>';
echo $fruits[4]. '<br>';
echo $fruits[5]. '<br>';
echo $fruits[6]. '<br>';
echo "my favourite fruit is".$fruits[0]." and ".$fruits[3]. '<br>';
//looping through an indexed array:use foreach
foreach ($fruits as $matunda){
    echo $matunda. '<br>';
}
//for(initial value;text value;increment value){
//    code to be executed
for ($x = 0; $x < count($fruits);$x++) {
//  echo out each item by accessing them using index numbers

    echo $fruits[$x] . '<br>';
}
$num_fruits = count($fruits);
for ($x = 0; $x < $num_fruits ;$x++){
// echo out each item by accessing them using index numbers
    echo $fruits{$x}.'<br>';
}

//Associative array:1 - populating directly
$geeks_fruits = array("craig"=>"mango","steve"=>"apple","victor"=>"Guava","masood"=>"grapes");
$team_color = array("man-u"=>"red","chelsea"=>"blue","realmadrid","borrusia"=>"yellow","man-city"=>"skyblue");
//Associative array:2 -populating one by one
$country_car_brand ['Kenya']= ('Nyayo');
$country_car_brand ['Germany']= array('Benz','BMW','VW');
$country_car_brand ['US']= ('ford');
$country_car_brand ['japan']= array('Mitsubishi'.'Toyota');
//accessing associative array item:use the keys
echo $country_car_brand['japan'];

//foreach
foreach ($country_car_brand['Germany'] as $magari){
    echo $magari,"<br>";
}
$car_count =count($country_car_brand ['Germany']);
$cars_found_germany = $country_car_brand ['Germany'];
for($i = 0; $i < $car_count; $i++){
    echo $cars_found_germany[$i].'<br>';
}



?>