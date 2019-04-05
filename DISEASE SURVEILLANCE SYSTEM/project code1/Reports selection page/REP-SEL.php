<!DOCTYPE html>
<html>
<head>
	<title>REPORT COUNTY SELECT PAGE</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">




<link href="style.css" rel = "stylesheet" type = "text/css">

<link href="css/bootstrap.css" rel = "stylesheet" type = "text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="js/bootstrap.js" type = "text/javascript">
</head>
<body>



<div class ="header"class="col-sm-4">

<div class = "row"class="col-sm-4">
	<div class = "title" class="col-sm-4">
	<p class ="Heading"class="col-sm-4">DISEASE SURVEILLANCE KENYA</p> 
    </div>

    <div class = "Sidebar"class="col-sm-4">

    <ul class ="main-nav">
    <li class = "active"><a href="..\index.php">Home</a></li>
    <li class ="litext"><a href="">services <i class="fa fa-sort-desc" style="font-size:10px"></i></a>
    <ul> 
    <li ><a href="..\Prediction select page\PRE-SEL.php">Disease Prediction</a></li>
    <li ><a href="..\Disease Analysis selection\AN-SEL.php">Disease Analysis</a></li>
    <li ><a href="..\Disease Deduction selection\DEDUC-SEL.php">Disease Deduction</a></li>
    <li ><a href="REP-SEL.php">Reports</a></li>
    </ul> </li>
    <li><a href="..\About us\About Us.php">about</a></li>
    <li><a href="..\Contact Page/Contactpage.php">contact</a></li>
    <li><a href="..\Login Page/login.php">Admin Login </a></li>    
    
</ul>

   
    </div>
   

<div class = "lBody"class="col-sm-4">
<div class = "logindi"class="col-sm-4">

<div class="logintitle"class="col-sm-4">

</div>
<div class="cont">
  <h2 class= "formti">County Report Selection form</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="county" class ="lab1">County:</label>
    <select class="form-control" id="sel1" placeholder="Enter county" name="county">
      
       <option value = "..\Reports\NAIROBI REPORT.PHP">Nairobi</option>
        <option value = "..\Reports\KWALE REPORT.PHP">Kwale</option>
        <option value = "..\Reports\MOMBASA REPORT.PHP">Mombasa</option>
        <!-- <option value = "..\Reports\MIGORI REPORT.PHP">Migori</option>    
        <option value =  "..\Reports\BARINGO REPORT.PHP">Baringo</ -->option>   
        <option value =  "..\Reports\BUSIA REPORT.PHP">Busia</option>
        <!-- <option value =  "..\Reports\MERU REPORT.PHP">Meru</option> -->
        <option value =  "..\Reports\VIHIGA REPORT.PHP">Vihiga</option>
        <!-- <option value = "..\Reports\KAJIADO REPORT.PHP" >Kajiado</option> -->
        <option value =  "..\Reports\MAKUENI REPORT.PHP">Makueni</option> 
    
    
   </select>
</div>
    <button type="submit" class="btn btn-default">Report</button>
  </form>
</div>



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
    <li ><a href="REP-SEL.php">Reports</a></li>
    <li><a href ="../Login Page/login.php">Admin Login</a></li>
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




<script type="text/javascript" src="selection.js"></script>



</body>



</html>