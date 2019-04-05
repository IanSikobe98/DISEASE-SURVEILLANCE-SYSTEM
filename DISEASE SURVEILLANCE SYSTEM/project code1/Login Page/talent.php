<?php 

if ( isset($_POST['cid']) && isset($_POST['name']) && isset($_POST['noh']) && isset($_POST['area']) && isset($_POST['popu']) && isset($_POST['tp']) ) 
{
	$cid = $_POST['cid'];
	$name = $_POST['name'];
	$noh = $_POST['noh'];
	$area = $_POST['area'];
	$popu = $_POST['popu'];
	$tp = $_POST['tp'];
	

	// store in db 
	$db = mysqli_connect("localhost","root","","disease_surveillance_database");
	if($db)
	{
		// echo "successfully connected to database";
		// see if id was already inserted 
		$sel = mysqli_query($db,"SELECT * FROM county_table ");
		if( mysqli_num_rows($sel) == 0 )
		{
			// insert parent id 
			$in = mysqli_query($db,"INSERT INTO 
				patients(County ID, name, No of households, Area(sq_km), Population density, Totalpopulation) 
				VALUES('$cid','$name','$noh','$area','$popu','$tp') ");
			if( $in )
			{
				echo "<br />Information successfully inserted &#10003;&#10003;<br />";
			}	
			else{ echo "Could not be inserted. Please check later."; }
		}
		else
		{
			echo "Try another parent id. That one was previously inserted.";
		}

	}
	else{ echo "Connection to database not possible."; }

}

?>