<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<body bgcolor=#FFFFFF>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><img src="http://www.ssn.edu.in/wp-content/themes/ssn/images/logo.jpg"></h5>
<div class="container">
 <a href="userHome.php" class="btn btn-outline-primary">
          <span class="glyphicon glyphicon-home"></span> Home
        </a></div>

  <nav class="my-2 my-md-0 mr-md-3">
  </nav>
  <button class="btn btn-outline-primary" onclick="logout()">Log Out</a>
</div>
<script type="text/javascript">
function logout()
	{
		 alert("Please wait...")
         x=setTimeout(func2,1000);

	}
	function func2()
	{
       window.open("index.php");
	}
</script>
</head>

<form action = "displayBooks.php" method="get">
<br>
<center>Enter the title of the book to be searched :
<input type="text" name="search" size="48">
<br></br>
<input type="submit" value="submit">
<input type="reset" value="Reset">
</center>
<br>
</form>
</body>
</html>