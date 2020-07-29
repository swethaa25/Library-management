
<!DOCTYPE html>
<html>
<head>
  <title>Library Management System</title>

<style type="text/css">
.form-group
  {
  margin-left:170px;
  color:white;
  }</style>
  <style type="text/css">
   .form-group form-check
   {
    margin-left:170px;
   }
 </style>


<style type="text/css">
.form-group1
  {
  
  margin-left:170px;
  color:white;
  }</style>
  <style type="text/css">
   .form-group1 form-check1
   {


    margin-left:170px;
	
   }
 </style>



<script>

// Below function Executes on click of login button.

function func1(){
var username = document.getElementById("exampleInputEmail1").value;
var password = document.getElementById("exampleInputPassword1").value;
if ( username == "admin@ssn.edu.in" && password == "SSN"){

window.location = "form2.php"; // Redirecting to other page.
return false;
}
else
{
alert("Invalid Email ID or Password");
return false;
}
}





</script>
 <style type="text/css">
  .btn-btn-primary
  {
    margin-left:170px;
  }
  body{
    background-image: url("origSSN.jpg");
    background-repeat: no-repeat;
    background-size: 1366px 680px;
  }
 </style>

 </head>

 <style type="text/css">
  .btn-btn-secondary
  {

    margin-left:170px;
	
  }
 </style>


 
 
<body>
 <link rel="stylesheet" type="text/css" href="bootstrap.css">
 <center><img src="http://www.sace.ssn.edu.in/wp-content/uploads/2017/05/logo.png"></center>
 <form name="f1"   method="post" style = "float: left;">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label><br>
    <input type="email" style="width: 300px" style="height: 500px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="em" placeholder="Enter email" required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label><br>
    <input type="Password" style="width: 300px" style="height: 500px" class="form-control" id="exampleInputPassword1" name="pw" placeholder="Password"  required autofocus>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>
  <input type="button" class="btn-btn-primary" value="SUBMIT" onclick="func1()">
  </form>


<form name="f2"   method="post" action="login.php" style = "margin-left: 600px;">
  <div class="form-group1" >
    <label for="exampleInputEmail2">Email address(user)</label><br>
    <input type="email" style="width: 300px" style="height: 500px" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" name="username" placeholder="Enter email" required autofocus>
  </div>
  <div class="form-group1">
    <label for="exampleInputPassword2">Password</label><br>
    <input type="Password" style="width: 300px" style="height: 500px" class="form-control" id="exampleInputPassword2" name="password" placeholder="Password"  required autofocus>
  </div>
  <div class="form-group1 form-check1">
    <input type="checkbox" class="form-check-input" id="exampleCheck2">
    <label class="form-check-label" for="exampleCheck2">Remember me</label>
  </div>
  <input type="button" class="btn-btn-secondary" value="LOGIN" >
  </form>



</body></html>