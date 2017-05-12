<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$username = $password = $emailErr = "";
	
    $username = test_input($_POST["uname"]);
    // check if e-mail address is well-formed
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) 
	{
      $emailErr = "Invalid email"; 
    }
	else 
	{
		 $username = stripslashes($_POST['uname']);
		 if (preg_match("/^[\w−]+(\.[\w−]+)*@" .
		 "[\w−]+(\.[\w−]+)*(\.[a-zA-Z]{2, })$/i",
		 $username) == 0) 
		 {
		 ++$errors;
		 echo "<p>You need to enter a valid " .
		 "e-mail address.</p>\n";
		 $username = "";
		 }
	}
  
  
  

 
 
}

?>

<h2 style="font-size:300%;color:grey;"><em>Games login</em></h2>

<form action="/login.php" method="post">
  <div class="imgcontainer">
    <img src="login.jpg" >
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
	

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
