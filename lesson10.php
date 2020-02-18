<?php
require 'header.php';
require 'config.php';


//COMPLETE PHP FORM

//algorithm
//1. Create variables that will store received data
$username =$first_name = $last_name =$email = $password1 = $password2 = $gender = '';
//2. Create variables that will store error messages
$username_err =$first_name_err = $last_name_err =$email_err = $password1_err = $password2_err = $gender_err = '';
//3. Process incoming data
//    3.1 check the request method
if($_SERVER['REQUEST_METHOD'] == 'POST') {
//    3.2 clean the data
    function safisha($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = safisha($_POST['username']);
    $first_name = safisha($_POST['first_name']);
    $last_name = safisha($_POST['last_name']);
    $email = safisha($_POST['email']);
    $password1 = safisha($_POST['pass1']);
    $password2 = safisha($_POST['pass2']);
    $gender = safisha($_POST['gender']);

//    3.3 check if data is empty
//if true assign error messages to respective error variables
    if (empty($username)) {
        $username_err = "please fill in your username";
    }
    if (empty($first_name)) {
        $first_name_err = "please fill in your first name";
    }
    if (empty($last_name)) {
        $last_name_err = "please fill in your last name";
    }
    if (empty($email)) {
        $email_err = "please fill in your email";
    }
    if (empty($password1)) {
        $password1_err = "please fill in your password";
    }
    if (empty($password2)) {
        $password2_err = "please confirm your password";
        if (empty($gender)) {
            $username_err = "please select your gender";
        }
//check if password1 and password2 are matching
        if ($password1 != $password2) {
            $password1_err = "your passwords did not match";
        } else {
//            password hushing
            $password1 = md5($password1);
            //inserting data into the table
            $sql = "INSERT INTO `users`(`id`, `username`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES (NULL ,'$username','$first_name','$last_name','$email','$password','$gender')";
            if (mysqli_query($connection, $sql)) {
                echo "Data inserted successfully <br>";
            } else {
                echo "Data not inserted " . mysqli_error($connection);
            }

        }

    }

}
    echo "DETAILS:";

//4. Display the data:Soon store data in a database

?>
<table style="width: 100%">
    <tr>
        <td><?php echo $username .'<br>';?></td>
        <td><?php echo $first_name .'<br>';?></td>
        <td><?php echo $last_name .'<br>';?></td>
        <td><?php echo $email .'<br>';?></td>
        <td><?php echo $password1 .'<br>';?></td>
        <td><?php echo $password2 .'<br>';?></td>
        <td><?php echo $gender .'<br>';?></td>




    </tr>





</table>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"method="post">
    <fieldset>
        <h3>Resgister here...</h3>
        <label for="">Username</label><br>
        <input type="text"name="username"> <br>
        <span class="error"style="color: red"><?php echo $username_err?></span><br>

        <label for="">first name</label><br>
        <input type="text"name="first_name"> <br>
        <span class="error"style="color: red"><?php echo $first_name_err?></span><br>

        <label for="">last name</label><br>
        <input type="text"name="last_name"> <br>
        <span class="error"style="color: red"><?php echo $last_name_err?></span> <br>

        <label for="">Email</label><br>
        <input type="email"name="email"><br>
        <span class="error"style="color: red"><?php echo $email_err?></span><br>

        <label for="">password</label><br>
        <input type="password"name="pass1"><br>
                <span class="error"style="color: red"><?php echo $password1_err?></span> <br>

        <label for="">confirm password</label><br>
        <input type="password"name="pass2"><br>
        <span class="error"style="color: red"><?php echo $password2_err?></span> <br>
        gender
         <span class="error"style="color: red"><?php echo $gender_err?></span> <br>
        <input type="radio"name="gender"value="male">Male
        <input type="radio"name="gender"value="female">Female
        <input type="radio"name="gender"value="others">Other<br><br>
        <button type="submit">submit</button>

    </fieldset>
</form>
<?php
require 'footer.php'



?>