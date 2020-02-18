<?php
//PHP $_POST is a PHP super global variable which is used to collect form data after submitting
// an HTML form which method='post'
//$_POST is also widely used to pass variables
//receive form data using POST request/$_POST() super global
//receive data
//declare variables to store sent data
$name ='';
$email ="";

//check the request method:GET or POST:use $_SERVER[]
if($_SERVER['REQUEST_METHOD'] == 'POST') {
//if method is post,grab data using the $_POST super global
    $name = $_POST['jina'];
    $email = $_POST['arafa'];
    $error = false;
//if name is empty
    if (empty($name)) {
        $error = true;
        echo "<p style='color:red'>please fill your name </p>";
    }
    if (empty($email)) {
        $error = true;
        echo "<p style ='color:red'>please fill in your email</p>";
    }
//print the data
    if (!$error) {
        echo "your name is $name and email is $email <br>";
    }
    else{
        $name =safisha($name);
        $email=safisha($email);
        echo "<p style='color:red'>your name is $name and email is $email</p><br>";
    }

}
//validating/cleaning data
//1.To remove unwanted space use:tria()
//2.To remove backslashes use stripslashes()
//<!--create a function to clean data-->

function safisha($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>








<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"method="post">
<!--    html special chars:prevents hacking-->

    <h3>Fill form...</h3>
    <input type="text"name="jina"placeholder="Enter name...."><br>
    <input type="email"name="arafa"placeholder="Enter email...."><br>
    <button type="submit">send</button>

<!--    action:location where data will be sent to in a server-->
<!--    method:request method to be used to send data to the server-->
<!--    name:is the key for a value entered in the form-->
<!--    this will result to ann associative array of this format-->

<!--    $_POST = array{("jina" =>"john","arafa" => "john@gmail.com")-->
</form>

<!---->
<!--$_GET:Used to collect data from a form just like $_POST-->
<!--        collect  dat sent via the URL-->
<?php
//grabbing data sent via $_GET()
$the_name = $_GET['name'];
$the_age = $_GET['age'];
$the_country = $_GET['country'];
echo "your details:Name:$the_name,Age:$the_age,Country:$the_country<br>"
?>
<a href="lesson9.php?name=peter&age=23&country=kenya">send details</a>