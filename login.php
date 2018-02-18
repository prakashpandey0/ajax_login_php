<?php


$conn = mysqli_connect("localhost","root","","educationhub") or die("connection error");

if(isset($_POST['user'], $_POST['pass'])){
	session_start();
    
	$query = mysqli_query($conn,"Select * from users where username = '".$_POST["user"]."' AND password ='".$_POST["pass"]."' ") or die("query error");

	if(mysqli_num_rows($query)>0){
		$_SESSION['username'] = $_POST['user'];
		echo "true";
	}else{
		echo "wrong username and password";

	}
}


?>