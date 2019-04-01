<!DOCTYPE html>
<html>
<head>
  <title>KWALE COUNTY DEDUCTION</title>
</head>

<link href="stylean.css" rel = "stylesheet" type = "text/css">
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
table, th, td {
    border: 1px solid black;
    height:auto;
    size:100%;
}
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
<div class = "countydes"class="col-sm-3">
<h1>COUNTY: BUSIA COUNTY</h1>  
<p></p>
<p></p>
<img class="img-responsive" src="BUSIA.jpg" alt="Chania" width="100%" height="100%">

</div>

  <div class = "tablepop">      
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// Create connection
$conn = new mysqli("localhost","root","","disease_surveillance_database");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name,Totalpopulation FROM county_table WHERE name = 'BUSIA' ";
$result = $conn->query($sql);

if ($result = $conn->query($sql)) {
if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Population</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["Totalpopulation"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
}
else{ printf("Query failed: %s\n", $conn->error);}
$conn->close();
?> 









</div>
<!-- </div> -->
<div class ="graphsi">
<BR>
<H1>COUNTY DEDUCTION</H1>
<h1> FACTORS INFLUENCING DISEASES</h1>
<p>The table below gives the main reason that has contributed to the ten priority diseases being rampant in this county.</p>
<p>The diseases that will be tackled in the deducting table include:</p>
<ul>
<li>HIV/AIDS
 <li> Lower Respiratory Infections</li>
  <li>Diarrheal Diseases</li>
  <li>Protein-Energy Malnutrition</li>
  <li>Stroke</li>
  <li>Preterm Birth Complications</li>
  <li>Malaria</li>
  <li>TB</li>
  <li>Ischemic Heart Disease</li>

</ul>
<!-- <h2>1.HIV/AIDS</h2>
<p>HIV/AIDS has accounted for about 15% of deaths in kenya which is the highest percerntage of deaths caused by the disease in Kenya.The distribution of the deaths of the past 12 months  depending on several factors will be depicted in the graphs.</p> -->

<P>The deuction tables are as shown below:</P>
<br><br><br>
         <?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// Create connection
$conn = new mysqli("localhost","root","","disease_surveillance_database");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT month, DIAR_DEDUC,TUB_DEDUC,MAL_DEDUC,HIV_DEDUC,UPPER_DEUC,ISCH_DEDUC, CARD_DEDUC, MALAR_DEDUC,PREG_MAL_DEDUC, PB_DEDUC FROM deguction_logic WHERE County_Number = 40 ";
$result = $conn->query($sql);

if ($result = $conn->query($sql)) {
if ($result->num_rows > 0) {
    echo "<table><tr><th>month</th><th>Ischemic Deduction</th><th>Cardiac Deduction</th><th>Malaria Deduction</th><th>Pregnancy Malaria Deduction</th><th>Upper preterm babies deduction</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["month"]. "</td><td>" . $row["ISCH_DEDUC"]. "</td><td>" . $row["CARD_DEDUC"]. "</td><td>" .$row["MALAR_DEDUC"]."</td><td>".$row["PREG_MAL_DEDUC"]."</td><td>".$row["PB_DEDUC"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
}
else{ printf("Query failed: %s\n", $conn->error);}
$conn->close();
?> 

<br><br>
         <?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// Create connection
$conn = new mysqli("localhost","root","","disease_surveillance_database");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT month, DIAR_DEDUC,TUB_DEDUC,MAL_DEDUC,HIV_DEDUC,UPPER_DEUC,ISCH_DEDUC, CARD_DEDUC, MALAR_DEDUC,PREG_MAL_DEDUC, PB_DEDUC FROM deguction_logic WHERE County_Number =40 ";
$result = $conn->query($sql);

if ($result = $conn->query($sql)) {
if ($result->num_rows > 0) {
    echo "<table><tr><th>month</th><th>Diarrhoea Deduction</th><th>Tuberculosis Deduction</th><th>Malnutrition Deduction</th><th>HIV Deduction</th><th>Upper respiatory dis deduction</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["month"]. "</td><td>" . $row["DIAR_DEDUC"]. "</td><td>" . $row["TUB_DEDUC"]. "</td><td>" .$row["MAL_DEDUC"]."</td><td>".$row["HIV_DEDUC"]."</td><td>".$row["UPPER_DEUC"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
}
else{ printf("Query failed: %s\n", $conn->error);}
$conn->close();
?> 

<BR><BR>



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