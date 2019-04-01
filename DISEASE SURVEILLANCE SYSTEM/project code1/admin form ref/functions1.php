<?php
 $con = mysqli_connect("localhost","root","","disease_surveillance_database") or die("not connected");
 
 if(isset($_POST["Import"])){
		
		$filename=$_FILES["file"]["tmp_name"];		
 
 
		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
 
 
	           $sql = "INSERT into `climate_data`(`County Number`, `Month_no`, `month`, `Climate_no`, `Avg_Temp(C)`, `Min_Temp(C)`, `Max-Temp(C)`, `Rainfall(mm)`) VALUES
                  ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."')";
                   $result = mysqli_query($con, $sql);
				if(!isset($result))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"MIGORI REPORTS.php\"
						  </script>";		
				}
				else {
					  echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"MIGORI REPORTS.php\"
					</script>";
				}
	         }
			
	         fclose($file);	
		 }
	}	 
 
 
 ?>