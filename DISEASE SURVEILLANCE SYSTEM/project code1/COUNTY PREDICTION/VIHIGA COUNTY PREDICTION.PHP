<!DOCTYPE html>
<html>
<head>
  <title>VIHIGA COUNTY PREDICTION</title>
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
<h1>COUNTY: VIHIGA COUNTY</h1>  
<p></p>
<p></p>
<img class="img-responsive" src="vihiga.png" alt="Chania" width="100%" height="100%">

</div>

  <div class = "tablepop">      
<?php


// Create connection
$conn = new mysqli("localhost","root","","disease_surveillance_database");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name,Totalpopulation FROM county_table WHERE name = 'VIHIGA' ";
$result = $conn->query($sql);

if ($result = $conn->query($sql)) {
if ($result->num_rows > 0) {
    echo "<table><tr><th>NAME</th><th>POPULATION</th></tr>";
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

<div class ="graphsi">
<BR>
<H1>COUNTY PREDICTION</H1>
<p>The graphs below gives the automated predictions on the number of people who will contact the diseases for the next coming months in reference to the  various factors studied.</p>
<p>The diseases that will be tackled in the predicting table include:</p>
<ul>
<li>HIV/AIDS
 <li> Lower Respiratory Infections</li>
  <li>Diarrheal Diseases</li>
  <li>Malaria</li>


</ul>


<p>

The factors to be used for the prediction include:
<ul>
<li>Rainfall</li>
<li>Temperature</li>

</ul>
</p>
<h3>i)Rainfall</h3>
<P>The prediction graphs of the number of people who will contact the various diseases in the coming 12 months depending on the rainfall weather pattern remaining the same is as as shown below:</P>
<br><br>

<canvas id="mycanvas" width="400" height="400"></canvas> 
<br><br><br>

<br><br>
<h3>ii)Temperature</h3>
<P>The prediction graph of the number of people who will contact the various diseases in the coming 12 months depending on the temperature  pattern remaining the same is as as shown below:</P>
<br><br>
<canvas id="mycanvas2" width="400" height="400"></canvas> 
<br><br>
<h2>PROOF OF PREDICTION</h2>
<h3>ACTUAL DATA FOR MARCH</h3>
<?php


// Create connection
$conn = new mysqli("localhost","root","","disease_surveillance_database");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT County_Number, Month_no, Period_Start, Diarrhoea, URS, General_malaria FROM proof_pred WHERE  County_Number= 38 AND Period_Start = 'Mar-18' ";
$result = $conn->query($sql);

if ($result = $conn->query($sql)) {
if ($result->num_rows > 0) {
    echo "<table><tr><th>Month</th><th>No of Diarrhoea patients</th><th>No of Malaria patients</th><th>No of LRS patients</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Period_Start"]. "</td><td>" . $row["Diarrhoea"]."</td><td>" . $row["General_malaria"]."</td><td>" . $row["URS"]. "</td></tr>";
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
<br><br>
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
  <script src = "preid6.js" type="text/javascript"></script>

 






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