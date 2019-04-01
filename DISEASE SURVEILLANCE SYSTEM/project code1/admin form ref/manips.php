<?php 
$con = mysqli_connect("localhost","root","","disease_surveillance_database") or die("not connected");

// details 
if( isset($_POST['name']) && isset($_POST['noh']) && isset($_POST['area']) && isset($_POST['popu'])&& isset($_POST['tp']) )
{
	$name = $_POST['name'];
	$noh = $_POST['noh'];
	$area = $_POST['area'];
	$popu = $_POST['popu'];
	$tp = $_POST['tp'];
// Area(sq_km)
$query = "insert into county_table (name,Noofhouseholds,Area,Population_density,Totalpopulation)values('$name','$noh','$area','$popu','$tp')";
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