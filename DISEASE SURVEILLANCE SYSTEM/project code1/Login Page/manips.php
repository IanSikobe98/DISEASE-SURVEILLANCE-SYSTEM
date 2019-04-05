<?php 
session_start();
$con = mysqli_connect("localhost","root","","disease_surveillance_database") or die("not connected");



// login 
if( isset($_POST['user']) && isset($_POST['pass']) )
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	// go to db 
	// validate 
	// set a session 
	// open MIGORI REPORTS.PHP 

	$sel = mysqli_query($con,"SELECT * FROM login WHERE username = '$user' AND password = '$pass' LIMIT 1 ");
	if( mysqli_num_rows($sel) >= 1 )
	{
		echo "Person found ...";
		$_SESSION['loggedin'] = $user;
		echo "<script>window.open('../admin form ref/MIGORI REPORTS.php?loggedin=$_SESSION[loggedin]','_self');</script>";
		exit();
	}
	else
	{
		echo "Person not found ...";
	}
}
// end login
