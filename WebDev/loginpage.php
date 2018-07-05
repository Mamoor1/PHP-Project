<?php
  
  include("db_connect.php");
  session_start();
  
?>


 <!DOCTYPE html>
<html>

<head>
<title>News</title>
<link rel="icon" href="eye.ico" type="image/x-icon">
<style>

h1{
  color:red;
}

body{
  background-image: url('water.gif');
    background-repeat: no-repeat;
    background-attachment: fixed;
	}
	
</style>

</head>

<body>


<?php 
$user=$_POST['user'];
$pass=$_POST['pass'];

$query="SELECT * from userinfo where(username='$user' and password='$pass')";
$sql=mysqli_query($conn,$query);
$result=mysqli_fetch_array($sql);


if($result[0]>0)
{
	echo "<h2>Login is successful</h2>";
	$_SESSION['usernameget']=$user;
	echo "<br><br> <h3>Welcome</h3>";
	echo "<br><br> <h3>$user</h3>";
	echo "<a href='index.php'>Go to Homepage</a>";
	
	
}

else
{
	echo "<h3>Username or password is incorrect<br><br></h3>";
	echo "<a href='SignIn.php'>Sign in</a>";
	echo "<br>";
	echo "<a href='SignUp.php'>Register</a>";
	
}


?>



</body>
</html>
