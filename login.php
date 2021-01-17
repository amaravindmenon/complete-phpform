<?php
session_start();
$con= mysqli_connect("localhost","root","root","formdata",8889);

if(isset($_POST['sub'])){
	$u=$_POST['user'];
	$p=$_POST['pass'];
	$s= "select * from reg where username='$u' and password= '$p'";
	$qu= mysqli_query($con, $s);
 
	if(mysqli_num_rows($qu)>0){
		$f= mysqli_fetch_assoc($qu);
		$_SESSION['id']=$f['id'];
		header ('location:home.php');
	}
	else{
		echo 'username or password does not exist';
	}
}
?>

<html>
	<head>
	<title>User Login Form</title>
	</head>
	<body>
        <h1> LOGIN FORM </h1>
		<form method="POST" enctype="multipart/form-data">
		Username: <input type="text" name="user"><br /><br />
		password: <input type="password" name="pass"><br /><br />
        <input type="submit" name="sub" value="submit">
		</form>
	</body>
</html>