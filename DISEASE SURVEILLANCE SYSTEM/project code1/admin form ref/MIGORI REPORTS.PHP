<!DOCTYPE html>
<html>
<head>
  <title>MIGORI REPORT</title>
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
  <a href="logout.php">Logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div class = "ANBody">
<h1><b><u>ADMIN DATA INPUT FORMS</u></b></h1>
<br>
<br>

<h2><u>COUNTY REGISTRATION</u></h2>
<h3><u>NEW COUNTY</u></h3>

<h1>new details</h1>
<p>County Name: <input type="text" name="name" id="name"></p>
<p>Number of households:<input type="text" name="noh" id="noh"></p>
<p>Area(sq km):<input type="text" name="area" id="area"></p>
<p>Population Density:<input type="text" name="popu" id="popu"></p>
<p>Total Population:<input type="text" name="tp" id="tp"></p>
<input type="submit" name="submit" onclick="FillForm()" value="submit">

<p id="validation"></p>
<script type="text/javascript">
  function FillForm()
  {
    var name = document.getElementById("name").value;
    var noh = document.getElementById("noh").value;
    var area = document.getElementById("area").value;
    var popu = document.getElementById("popu").value;
    var tp = document.getElementById("tp").value;
    var validation = document.getElementById("validation");
    if( name == "" || noh== "" || area == "" || popu == "" || tp == "")
    {
      validation.innerHTML = "Ensure none of the fields is empty...";
      return false;
    }
    else
    {
      validation.innerHTML = "Processing ...";
      var ajx = new XMLHttpRequest();
      ajx.open("POST","manips.php");
      ajx.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      ajx.onreadystatechange = function()
      {
        if( ajx.status == 200 && ajx.readyState == 4 )
        {
          var data = ajx.responseText;
          validation.innerHTML = data;
        }
      };
      ajx.send("name="+name+"&noh="+noh+"&area="+area+"&popu="+popu+"&tp="+tp);


      return false;
    }

    return false;
  }
</script>


<h1><b><u>ADMIN DATA INPUT FILES</u></b></h1>
<br>
<br>

<h2><u>FILE INPUT FOR DISEASE SURVEILLANCE</u></h2>
<form class="form-horizontal" action="functions1.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>CLIMATE DATA INPUT</legend>

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
<form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>PEOPLE DATA INPUT</legend>

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

<h2><u>CLIMATE DATA EDIT</u></h2>


<h1>new details</h1>
<p>County No: <input type="text" name="cid" id="cid"></p>
<p>Month_no:<input type="text" name="monno" id="monno"></p>
<p>Month:<input type="text" name="mon" id="mon"></p>
<p>Climate Number:<input type="text" name="clinm" id="clinm"></p>
<p>AVG Temp(C):<input type="text" name="avgtemp" id="avgtemp"></p>
<p>MIN Temp(C):<input type="text" name="mintemp" id="mintemp"></p>
<p>MAX Temp(C):<input type="text" name="maxtemp" id="maxtemp"></p>
<p>Rainfall(mm):<input type="text" name="rain" id="rain"></p>
<input type="submit" name="submit1" onclick="FillForm()" value="submit">

<p id="validation1"></p>
<script type="text/javascript">
  function FillForm()
  {
    var cid = document.getElementById("cid").value;
    var monno = document.getElementById("monno").value;
    var mon = document.getElementById("mon").value;
    var clinm = document.getElementById("clinm").value;
    var avgtemp = document.getElementById("avgtemp").value;
    var mintemp = document.getElementById("mintemp").value;
    var maxtemp = document.getElementById("maxtemp").value;
    var rain = document.getElementById("rain").value;
    var validation1 = document.getElementById("validation1");
    if( cid == "" || monno== "" || mon == "" || clinm == "" || avgtemp == "" || mintemp == "" || maxtemp == "" || rain == "" )
    {
      validation1.innerHTML = "Ensure none of the fields is empty...";
      return false;
    }
    else
    {
      validation1.innerHTML = "Processing ...";
      var ajx = new XMLHttpRequest();
      ajx.open("POST","manips1.php");
      ajx.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      ajx.onreadystatechange = function()
      {
        if( ajx.status == 200 && ajx.readyState == 4 )
        {
          var data1 = ajx.responseText;
          validation1.innerHTML = data1;
        }
      };
      ajx.send("cid="+cid+"&monno="+monno+"&mon="+mon+"&clinm="+clinm+"&avgtemp="+avgtemp+"&mintemp="+mintemp+"&maxtemp="+maxtemp+"&rain="+rain);


      return false;
    }

    return false;
  }
</script>



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
<!-- <?php
//mysql_connect("localhost","root","") or die("not connected");
//mysql_select_db("data") or die("no db found");

?> -->