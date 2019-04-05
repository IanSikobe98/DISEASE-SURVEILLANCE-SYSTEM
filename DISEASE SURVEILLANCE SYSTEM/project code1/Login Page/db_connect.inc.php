<?php
// Database settings
// database hostname or IP. default:localhost
// localhost will be correct for 99% of times
define("HOST", "localhost");
// Database user
define("DBUSER", "dbusername");
// Database password
define("PASS", "dbpassword");
// Database name
define("DB", "dbname");
 
############## Make the mysql connection ###########
$conn = mysql_connect(HOST, DBUSER, PASS);
if (!$conn)
{
    // the connection failed so quit the script
    die('Could not connect !<br />Please contact the site\'s administrator.');
}
$db = mysql_select_db(DB);
if (!$db)
{
    // cannot connect to the database so quit the script
    die('Could not connect to database !<br />Please contact the site\'s administrator.');
}
?>