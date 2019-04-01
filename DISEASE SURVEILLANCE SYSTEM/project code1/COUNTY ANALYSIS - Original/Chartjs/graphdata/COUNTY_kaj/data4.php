<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'disease_surveillance_database');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("SELECT  Period_Startm,Diarrhoeam,Tuberculosism,Malnutritionm,Ischemic_Diseasem,HIVm,Malaria_pregnancym,General_malariam,Cardiovascular_Dism,Upper_Respiratory_Tract_Infectionsm,Preterm_Babiesm  FROM people_datamore5 WHERE County_Numberm = 34");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
 
// $myarray =array(json_encode($data));
// print myarray;

print json_encode($data);