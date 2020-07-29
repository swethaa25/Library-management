
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
<style>
form{text-align: center;}
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>


<title>Add Books</title>
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
  <h5 class="my-0 mr-md-auto font-weight-normal"><img src="http://www.ssn.edu.in/wp-content/themes/ssn/images/logo.jpg"></h5><div class="container">
 <a href="form2.php" class="btn btn-outline-primary">
          <span class="glyphicon glyphicon-home"></span> Home
        </a></div>

  
  <nav class="my-2 my-md-0 mr-md-3">
  </nav>
  <button class="btn btn-outline-primary" onclick="func1()">Log Out</a>
</div>

	<form method="post" action="process1.php">
	<label>S.NO</label>
	<input type="text" name="sno" />
	<br />
	<label>ACCESS NUMBER</label>
	<input type="text" name="accno" />
	<br />
	<label>BOOK TITLE</label>
	<input type="text" name="title" />
	<br />
	<label>BOOK AUTHOR</label>
	<input type="text" name="author" />
	<br/>
	<label>PUBLICATION</label>
	<input type="text" name="publication" />
	<br/>
	<label>PRICE</label>
	<input type="text" name="price" />
	<br />
       <label>RACK</label>
	<input type="text" name="rack" />
	<br />


<input type="submit" value="ADD BOOKS">
</form>

</body>
</html>