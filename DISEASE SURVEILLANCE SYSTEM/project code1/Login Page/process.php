<?
$username = $POST['user'];
$password = $POST['pass'];

// $username =
// $password =
// $username =
// $password =
 
mysql_connect("localhost","root","");
mysql_select_db("disease_surveillance_database")

$result = mysql_query("Select * from users where username = '$username'  and password = '$password'")
   or die("failed to query db".mysql_error());
   $row = mysql_fetch_array($result);
   if($row['username']==$username && $row['password']== $password){
   	echo "login succesful.welcome" $row['username'];
   }else {
   	echo"failed to login"
   }

?>