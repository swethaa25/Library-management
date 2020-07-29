<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<title>USER DETAILS</title>
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
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><img src="http://www.ssn.edu.in/wp-content/themes/ssn/images/logo.jpg"></h5>
<div class="container">
 <a href="form2.php" class="btn btn-outline-primary">
          <span class="glyphicon glyphicon-home"></span> Home
        </a></div>

  <nav class="my-2 my-md-0 mr-md-3">
  </nav>
<a class="btn btn-outline-primary" href="delbook.php" role="button" style="margin: 5px; " >DELETE ANOTHER BOOK</a>
  <button class="btn btn-outline-primary" onclick="func1()">Log Out</a>
</div>

<?php include 'database.php'; ?>

<?php

// create a variable
$empcode=$_POST['bookid'];

//Execute the query


mysqli_query($connect,"delete from books where accno='$empcode'");
				
	if(mysqli_affected_rows($connect) > 0){
	echo '<script language="javascript">';
	echo 'alert("Book deleted")';
	echo '</script>';

	
} else {
	echo "Book Not deleted<br />";
	echo mysqli_error ($connect);
}


 
 
echo '<table border="2" align="center" cellspacing="5" cellpadding="5"> 
      <tr> 
          <td> <font face="Arial"><b>SNO</font> </td>
          <td> <font face="Arial"><b>ACCESSNO</font> </td> 
          <td> <font face="Arial"><b>TITLE</font> </td>  
          <td> <font face="Arial"><b>AUTHOR</font> </td>  
          <td> <font face="Arial"><b>PUBLICATION</font> </td>
          <td> <font face="Arial"><b>PRICE</font> </td>

      </tr>';
 $query="SELECT * FROM books";
if ($result = mysqli_query($connect,$query)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $fn = $row["sno"];
        $ln = $row["accno"];
        $em = $row["title"];
        $pw = $row["author"];
        $pb = $row["publication"];
        $pr = $row["price"];
 
        echo '<tr> 
                  <td>'.$fn.'</td> 
                  <td>'.$ln.'</td> 
                  <td>'.$em.'</td> 
                  <td>'.$pw.'</td> 
		   <td>'.$pb.'</td>
                  <td>'.$pr.'</td> 

              </tr>';
    }
    $result->free();
}
?>

</body>
</html>