<?php
require('dbconn.php');
?>



<html>


<head>

	<title>Journal System </title>

	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">


</head>



<body>

	<h1>Journal SYSTEM</h1>

	<div class="container">

		<div class="login">
			<h2>Sign In</h2>
			<form action="index.php" method="post">
				<input type="text" Name="email" placeholder="email" required="">
				<input type="password" Name="Password" placeholder="Password" required="">
			
			
			<div class="send-button">
				
					<input type="submit" name="signin"; value="Sign In">
				</form>
			</div>
			
			<div class="clear"></div>
		</div>

		<div class="register">
			<h2>Sign Up</h2>
			<form action="index.php" method="post">
				<input type="text" Name="Name" placeholder="Name" required>
				<input type="text" Name="Email" placeholder="Email" required>
				<input type="password" Name="Password" placeholder="Password" required>
			<br><br>
			
			<div class="send-button">
			    <input type="submit" name="signup" value="Sign Up">
			    </form>
			</div>
			
		</div>

		<div class="clear"></div>

	</div>

<?php
if(isset($_POST['signin']))
{$u=$_POST['email'];
 $p=$_POST['Password'];

 $sql="select * from user where email='$u'";

 $result = $conn->query($sql);
$row = $result->fetch_assoc();
$x=$row['password'];

if(strcasecmp($x,$p)==0 && !empty($u))
  {
   $_SESSION['email']=$u;
   
   header('location:loggedin/index.php');
  
        
  }
else 
 { echo "<script type='text/javascript'>alert('Failed to Login! Incorrect email or Password')</script>";
}
   

}

if(isset($_POST['signup']))
{
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$password=$_POST['Password'];

	$sql="insert into user (name,email,password) values ('$name','$email','$password')";

	if ($conn->query($sql) === TRUE) {
echo "<script type='text/javascript'>alert('Registration Successful')</script>";
} else {
    
echo "<script type='text/javascript'>alert('User Exists')</script>";
}
}

?>

</body>

</html>
