<!DOCTYPE html>
<html>
<head>
	<title>iop</title>
</head>
<body>
<Table>
<tr>
<th>Id</th>
<th> Username</th>
<th> Password </th> 
</tr> 
<?php
$conn = mysqli_connect("localhost","root","","disease_surveillance_database");
if ($conn -> connect_error){
  die("Connection failed:". $conn -> connect_error); 
}
$sql = "SELECT County ID ,name, Total population from county_table  ";
$result = $conn-> query($sql);
echo $result;
if($result-> mysql_num_rows() > 0){
  while($row = $result->  cubrid_fetch_assoc(){
    echo "<tr><td>". $row["County ID"]."</td><td>". $row["name"]."</td><td>". $row["Total population"]."</td><tr>";
  }
  echo "</table>";
}
else{
  echo "0 result";
}
$conn->close();
?>
</table>



</body>
</html>