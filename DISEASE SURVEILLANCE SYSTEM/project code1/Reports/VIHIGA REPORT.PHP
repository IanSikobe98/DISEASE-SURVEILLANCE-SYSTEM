<!DOCTYPE html>
<html>
<head>
  <title>VIHIGA REPORT</title>
</head>

<link href="stylean1.css" rel = "stylesheet" type = "text/css">
<link href="css/bootstrap.css" rel = "stylesheet" type = "text/css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<body>
  
  <style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: blue; 
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 17px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

.dropdown:hover .dropdown-content {
    display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
<style>
table{
border-collapse:collapse;
width:100%;
color:#d96459;
font-family: monospace;
font-size: 25px;
text-align: left;

}

th{
  background-color: #d96459;
  color:white;
  text-align: left;
  padding: 8px;
}
tr: nth-child(even) {background-color: #f2f2f2}


</style>

<div class = "header">
  <p class ="Heading"class="col-sm-4" style = "font-size:3vw;">DISEASE SURVEILLANCE KENYA</p> 
 </div>
<div class="topnav" id="myTopnav">
  <a href="..\index.php" class="active">Home</a>
  <a href="..\Disease Analysis selection\AN-SEL.php">Disease Analysis</a>
  <a href="..\Prediction select page\PRE-SEL.php">Disease Prediction</a>
  <a href="..\Disease Deduction selection\DEDUC-SEL.php">Disease Deduction</a>
  <a href="..\Reports selection page\REP-SEL.php">Reports</a>
  
  <a href="..\Contact Page\Contactpage.php">Contact Us</a>
  <a href="..\About us\About Us.php">About</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div class = "ANBody">
<div class = "Tablesrep">
<H1 style="text-align: center;"><u>REPORT SUMMARY</u></H1>
<h2>COUNTY:VIHIGA</h2>
<div style="overflow-x:auto;">
<TABLE>
  
  <tr>
<th>Name</th>
<th>Total Population</th>

</tr>
<?php
$conn = new mysqli("localhost","root","","disease_surveillance_database");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name,Totalpopulation FROM county_table WHERE name = 'VIHIGA' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["Totalpopulation"]."</td></tr>";
    }
    echo "</table>";
    } else {
    echo "0 results";
  }
    $conn->close();
?> 


</TABLE>
</div>
<br><br>
<br><br>

<div style="overflow-x:auto;">
<TABLE>
  
  <tr>
<th>County</th>
<th>Number of hospitals</th>

</tr>
<?php
$conn = new mysqli("localhost","root","","disease_surveillance_database");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  County,Total_Health_facilities FROM total_hospitals WHERE County = 'VIHIGA' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["County"]. "</td><td>" . $row["Total_Health_facilities"]. "</td></tr>";
   
   } echo "</table>";
    } else {
    echo "0 results";
  }
    $conn->close();
?> 


</TABLE>

</div>

<br><br>
<br><br>
<h3><U>TOTAL NUMBER OF CASES FOR THE PAST 12 MONTHS</U></h3>
<BR>
<div style="overflow-x:auto;">
<TABLE>
  
  <tr>

<th>Diarrhoea</th>
<th>Tuberculosis</th>
<th>General malaria</th>
<th>HIV</th>
<th>Ischemic Disease</th>


</tr>
<?php
$conn = new mysqli("localhost","root","","disease_surveillance_database");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT County_Number, CName, Diarrhoea, Tuberculosis, General_malaria, HIV, Ischemic_Disease, Malaria_pregnancy, Malnutrition, Preterm_Babies, Upper_Respiratory_Tract_Infections, Cardiovascular_Dis FROM total_cases WHERE County_Number= 38 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Diarrhoea"]. "</td><td>" . $row["Tuberculosis"]."</td><td>" . $row["General_malaria"]."</td><td>" . $row["HIV"]."</td><td>" . $row["Ischemic_Disease"]."</td></tr>";
   
   } echo "</table>";
    } else {
    echo "0 results";
  }
    $conn->close();
?> 


</TABLE>
</div>

<br><br>
<br><br>
<div style="overflow-x:auto;">
<TABLE>
  
  <tr>

<th>malaria in preg</th>
<th>Malnutrition</th>
<th>Preterm babies</th>
<th>URS</th>
<th>Cardiovascular Disease</th>


</tr>
<?php
$conn = new mysqli("localhost","root","","disease_surveillance_database");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT County_Number, CName, Diarrhoea, Tuberculosis, General_malaria, HIV, Ischemic_Disease, Malaria_pregnancy, Malnutrition, Preterm_Babies, Upper_Respiratory_Tract_Infections, Cardiovascular_Dis FROM total_cases WHERE County_Number= 38 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Malaria_pregnancy"]. "</td><td>" . $row["Malnutrition"]."</td><td>" . $row["Preterm_Babies"]."</td><td>" . $row["Upper_Respiratory_Tract_Infections"]."</td><td>" . $row["Cardiovascular_Dis"]."</td></tr>";
   
   } echo "</table>";
    } else {
    echo "0 results";
  }
    $conn->close();
?> 


</TABLE>
</div>
</div>
</div>

<div class="Footer-top"class="col-sm-4">
  

</div>

<div class = "footer-middle"class="col-sm-4">
<div class = "Quick"class="col-sm-4">
<h1 class = "quicklinksnm"class="col-sm-4"><u>Quick links</u></h1>
<hr size = "10"width="50%" align="center" color = "#42C0FB" >
<ul>
    <li><a href ="../index.php">Home</a></li>
    <li ><a href="../Prediction select page\PRE-SEL.php">Disease Prediction</a></li>
    <li ><a href="../Disease Analysis selection\AN-SEL.php">Disease Analysis</a></li>
    <li ><a href="../Disease Deduction selection\DEDUC-SEL.php">Disease Deduction</a></li>
    <li ><a href="../Reports selection page\REP-SEL.php">Reports</a></li>
    <li><a href ="../Login Page/login.php">Admin Login</a></li>
<li> <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a></li>
</ul>
</div>
<div class ="contactus" class="col-sm-4">
<h1 class = "contact" class="col-sm-4">Contacts</h1>  
<hr width="50%" align="center" color = "white" size = "40%">
<ul>
<li><a href ="#">Mobile : 0721383105</a></li>
<li><a href ="#">Email :ianwalter309@gmail.com</a></li>
</ul>
</div>


<div class = "footer-bottom" class="col-sm-4">

<p class="foottext">&copy; 2018 Disease Surveillance Management System Services | Site Credits | Privacy Policy</p>

</div>
</div>




  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"> </script>

<script type="text/javascript" src ="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js "></script>
  <script src = "Chartjs/app.js" type="text/javascript"></script>
<!--  <script src = "ian.js" type="text/javascript"></script>
<script type="text/javascript" src="graphs/js/app.js"></script>  -->
 






</body>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</html>