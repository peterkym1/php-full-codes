<?php
//some predefined variables in php are 'superglobals',which means that they are always accessible,
//regardless of scope - and you can access them from any function, class or file without having to do anything special.
//the PHP superglobal variables are:
//
//  $GLOBAL
//  $_SERVER
//  $_REQUEST
//  $_POST
//  $_GET
//  $_FILES
//  $_ENV
//  $_COOKIE
//  $_SESSION


//  $GLOBAL
//super global variables are built in variables that are always available in all scopes
//$GLOBALS is a PHP super global variable which is used to access global variables
//from anywhere in the PHP script (also from within functions or methods).
//PHP stores all global variables in an array called $GLOBALS[index].
//The index holds the name of the variable.
$GLOBALS['name'] = "hermit";
$x =75;
$y = 25;

$GLOBALS['sum'] = $x + $y;

//  $_SERVER
//$_SERVER is a PHP super global variable which holds information about headers, paths,
//and script locations.

//to find file location use element 'PHP_self' in $_SERVER
$phpfilepath =$_SERVER["PHP_SELF"];
echo $phpfilepath."<br>";
//get server name
$servername= $_SERVER["SERVER_NAME"];
echo "SERVER NAME:". $servername."<br>";
//get request method
$request_method =$_SERVER["REQUEST_METHOD"];
echo "REQUEST METHOD:". $request_method."<br>";

//$_REQUEST: we need a form for this
$get_name = $_REQUEST['jina'];
$get_email = $_REQUEST['arafa'];
echo "$get_name <br>";
echo "$get_email <br>";
echo "
     <form action='lesson8.php' method='post'>
        <label for=''>username</label>
        <input type='text'name='jina'><br>
        <label for=''>email</label>
        <input type='email'name='arafa'>
        <button type='submit'>send data</button>
     </form>
"


?>
