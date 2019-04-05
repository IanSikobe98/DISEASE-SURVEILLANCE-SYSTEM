<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMN LOGIN PAGE</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->



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
   <!--  <div class ="PSBody"> -->
    <div class = "Sidebar"class="col-sm-4">

    <ul class ="main-nav">
    <li class = "active"><a href="..\index.php">Home</a></li>
    <li class ="litext"><a href="">services <i class="fa fa-sort-desc" style="font-size:10px"></i></a>
    <ul> 
    <li ><a href="..\Prediction select page\PRE-SEL.php">Disease Prediction</a></li>
    <li ><a href="..\Disease Analysis selection\AN-SEL.php">Disease Analysis</a></li>
    <li ><a href="..\Disease Deduction selection\DEDUC-SEL.php">Disease Deduction</a></li>
    <li ><a href="..\Reports selection page\REP-SEL.php">Reports</a></li>
    </ul> </li>
    <li><a href="..\About us\About Us.php">about</a></li>
    <li><a href="..\Contact Page\Contactpage.php">contact</a></li>
    <li><a href="login.php">Admin Login </a></li>    
    
</ul>
 </div>

<div class = "lBody"class="col-sm-4">
<div class = "logindi"class="col-sm-4">
<div class="logintitle"class="col-sm-4">

</div>
<?php 
// if had logged in 
if( isset($_SESSION['loggedin']) )
{
  echo "
  <script>
  window.open('../admin form ref/MIGORI REPORTS.php','_self')
  </script>";
  exit();
}
?>
<div class="cont">
  <h2 class= "formti">Login Page</h2>
    
    <div class="form-group">
      <label for="county" class ="lab1">Name:</label>
    <input type= text" id="user" class='form-control col-sm-6' placeholder="Enter name" name="user">
    
    <label for="county" class ="lab1">Password:</label>
    <input type= "password" id="pass" class='form-control col-sm-6' placeholder="Enter password" name="pass">
</div>
    <input type="button" class="btn btn-success btn-md-5" id ="btn" value ="County Analysis" />
    <p id="validation" style="color:white;"></p>
  
  <script src="../jquery.js"></script>
  <script>
    $("document").ready(function()
    {
      $("#btn").on("click",function()
      { 
        var user = $("#user").val();
        var pass = $("#pass").val();
        var validation = $("#validation");
        $.post("manips.php",{'user': user,'pass': pass},function(data)
          {
            validation.html(data);
          });
        return false;
      });
    });
  </script>
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
    <li ><a href="../Reports selection page\REP-SEL.php">Reports</a></li>
    <li><a href ="login.php">Admin Login</a></li>
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








</body>




<!-- <script>
$(document).ready(function(){
  $("#form-group").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".sel1").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</html>