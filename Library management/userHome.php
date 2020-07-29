<? php
//session_start();
//$paa=$_SESSION['pass'];
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
  <h1 class="display-4">HELLO USER!</h1>

  <a class="btn btn-primary btn-lg" href="searchBooks.php" role="button">SEARCH BOOK</a>
 <a class="btn btn-primary btn-lg" href="history2.php" role="button">NOT YET RETURNED</a>
  <a class="btn btn-primary btn-lg" href="history3.php" role="button">RETURNED</a>
 


</div>

</body>
</html>