
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
<style>
form{text-align: center;}
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>


<title>Generate Report</title>
</head>
<body>
	<script type="text/javascript">
	var x;
	function func1()
	{
		 alert("Please wait...")
         x=setTimeout(func2,1000);

	}
	function func2()
	{
       window.open("index.php");
	}
	</script>
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><img src="http://www.ssn.edu.in/wp-content/themes/ssn/images/logo.jpg"></h5>
<div class="container">
 <a href="form2.php" class="btn btn-outline-primary">
          <span class="glyphicon glyphicon-home"></span> Home
        </a></div>

  <nav class="my-2 my-md-0 mr-md-3">
  </nav>
  <button class="btn btn-outline-primary" onclick="func1()">Log Out</a>
</div>

<form method="post" action="genreport2.php" enctype="multipart/form-data">
<label>Fromdate</label>
<input type="date" name="fromdate" />
<br />
<label>Todate</label>
<input type="date" name="todate" />
<br />

<input type="submit" value="Generate Report">
</form>



</body>
</html>