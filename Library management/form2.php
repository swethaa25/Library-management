<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<title>main page</title>
<script type="text/javascript">
	var x;
	function func1()
	{
		 alert("Please wait...")
         x=setTimeout(func2,3000);

	}
	function func2()
	{
       window.open("index.php");
	}
	</script>
</head>
<body>
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><img src="http://www.ssn.edu.in/wp-content/themes/ssn/images/logo.jpg"></h5>
  <nav class="my-2 my-md-0 mr-md-3">
  </nav>
  <button class="btn btn-outline-primary" onclick="func1()">Log Out</a>
</div>
<div class="jumbotron">
  <h1 class="display-4">HELLO ADMIN!</h1>

  <a class="btn btn-primary btn-lg" href="form3.php" role="button">ADD USER</a>
 <a class="btn btn-primary btn-lg" href="form4.php" role="button">ADD BOOKS</a>
 <a class="btn btn-primary btn-lg" href="genreport.php" role="button">REPORT</a>
 <a class="btn btn-primary btn-lg" href="deleteuser.php" role="button">DELETE USER</a>
<a class="btn btn-primary btn-lg" href="delbook.php" role="button">DELETE BOOK</a>
 <a class="btn btn-primary btn-lg" href="issue.php" role="button">ISSUE</a>
<a class="btn btn-primary btn-lg" href="return.php" role="button">RETURN</a>
<a class="btn btn-primary btn-lg" href="userhist.php" role="button">USER HISTORY</a>
<a class="btn btn-primary btn-lg" href="bookhis.php" role="button">BOOK HISTORY</a>

<a class="btn btn-primary btn-lg" href="notre.php" role="button">NOT RETURNED</a>


</div>

</body>
</html>