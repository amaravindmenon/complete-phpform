<?php
session_start();
$con= mysqli_connect("localhost","root","root","formdata",8889);

if(!isset($_SESSION["id"])){
	header("Location: login.php");
	exit();
}
 
$s="select*from reg where id='$_SESSION[id]'";
$qu= mysqli_query($con, $s);
$f=mysqli_fetch_assoc($qu);
?>


<html>
	<body>
		<table>
			<tr>
				<td>Name</td>
				<td><?php echo $f['name'];?></td>
			</tr>
			<tr>
				<td> Username</td>
				<td><?php	echo $f['username'];?></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><?php	echo $f['password']."<br>";?></td>
			</tr>
			<tr>
				<td> City </td> 
				<td><?php	echo $f['city']."<br>";?></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><?php	echo $f['gender']."<br>";?></td>
			</tr>
			<tr>
				<td> Image</td>
				<td><img src="<?php	echo $f['image'];?>" width="100px" height="100px"></td>
			</tr>
		</table>
		<a href="logout.php">Logout</a>
	</body>
</html>