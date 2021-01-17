<?php
session_start();
$con= mysqli_connect("localhost","root","root","formdata",8889);

if(isset($_POST['sub'])){
	$t=$_POST['text'];
	$u=$_POST['user'];
	$p=$_POST['pass'];
	$c=$_POST['city'];
	$g=$_POST['gen'];

	if($_FILES['f1']['name']){
		move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
		$img="image/".$_FILES['f1']['name'];
	}

	$i="insert into reg (name,username,password,city,image,gender) values('$t','$u','$p','$c','$img','$g')";
		if(mysqli_query($con, $i)){
		echo "inserted successfully..!";
	}
}
?>




<html>
	<head>
	<title></title>
	</head>
	<body>
	<h1> REGISTRATION </h1>
		<form method="POST" enctype="multipart/form-data">
		Name: <input type="text" name="text"><br /><br />
		Username: <input type="text" name="user"><br /><br />
		password: <input type="password" name="pass"><br /><br />
		city: <select name="city">
				<option value="">Select</option>
				<option value="knp">kanpur</option>
				<option value="lko">lucknow</option>
			</select><br /><br />
		Gender:	<input type="radio"name="gen" id="gen" value="male">male
				<input type="radio" name="gen" id="gen" value="female">female<br /><br />
		Image: <input type="file" name="f1"><br /><br />
		<input type="submit" value="submit" name="sub">
		</form>
	</body>
</html>