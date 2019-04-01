<?php 
$con = mysqli_connect("localhost","root","","disease_surveillance_database") or die("not connected");

// details 
if( isset($_POST['cid']) && isset($_POST['monno']) && isset($_POST['mon']) && isset($_POST['clinm'])&& isset($_POST['avgtemp']) && isset($_POST['mintemp'])&& isset($_POST['maxtemp'])&& isset($_POST['rain']))
{
	$cid = $_POST['cid'];
	$monno = $_POST['monno'];
	$mon = $_POST['mon'];
	$clinm = $_POST['clinm'];
	$avgtemp = $_POST['avgtemp'];
	$mintemp = $_POST['mintemp'];
	$maxtemp = $_POST['maxtemp'];
	$rain = $_POST['rain'];
// Area(sq_km)
$query = "UPDATE climate_data SET `County Number` = '$cid',`Month_no`='$monno',	`month`= '$mon',`Climate_no`='$clinm',`Avg_Temp(C)`='$avgtemp',`Min_Temp(C)`='$mintemp',`Max-Temp(C)`='$maxtemp',`Rainfall(mm)`='$rain' WHERE `Climate_no`='$clinm'";
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

// "INSERT INTO climate_data (`County Number`,`Month_no`,	`month`,`Climate_no`,`Avg_Temp(C)`,`Min_Temp(C)`,`Max-Temp(C)`,`Rainfall(mm)`)values('$cid','$monno','$mon','$clinm','$avgtemp','$mintemp','$maxtemp','$rain')"

?>