<?php 
$con = mysqli_connect("localhost","root","","data") or die("not connected");

// details 
if( isset($_POST['name']) && isset($_POST['fname']) && isset($_POST['roll']) && isset($_POST['result']) )
{
	$name = $_POST['name'];
	$fname = $_POST['fname'];
	$roll = $_POST['roll'];
	$result = $_POST['result'];

	$query = "insert into data (name,fname,roll,result)values('$name','$fname','$roll','$result')";
	$sel = mysqli_query($con,$query);
	if( $sel )
	{
		echo "Successfully inserted.";
	}
	else
	{
		echo "An error occured.";
	}
}
// end details 


?>