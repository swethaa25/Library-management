<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<title>REPORT</title>
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
<div class="container">
 <a href="form2.php" class="btn btn-outline-primary">
          <span class="glyphicon glyphicon-home"></span> Home
        </a></div>

  <nav class="my-2 my-md-0 mr-md-3">
  </nav>
<a class="btn btn-outline-primary" href="genreport.php" role="button" style="margin: 5px; " >GENERATE ANOTHER REPORT</a>
  <button class="btn btn-outline-primary" onclick="func1()">Log Out</a>
</div>

<?php include 'database.php'; ?>

<?php

// create a variable
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];

//Execute the query

mysqli_query($connect,"SELECT * FROM issue WHERE 
issuedate BETWEEN '$fromdate' and '$todate'");
				
	if(mysqli_affected_rows($connect) > 0){
	echo '<script language="javascript">';
	echo '</script>';
} else {
	echo "error in report generation<br />";
	echo mysqli_error ($connect);
}


 
 
echo '<table border="2" align="center" cellspacing="5" cellpadding="5"> 
      <tr> 
          <td> <font face="Arial"><b>Issue Date</font> </td> 
          <td> <font face="Arial"><b>User ID</font> </td> 
          <td> <font face="Arial"><b>Book ID</font> </td> 
          <td> <font face="Arial"><b>Book Name</font> </td>
            
      </tr>';
$query="SELECT * FROM issue WHERE 
issuedate BETWEEN '$fromdate' and '$todate'";
if ($result = mysqli_query($connect,$query)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["issuedate"];
        $nm = $row["userid"];
        $bid = $row["bookid"];
        $bn = $row["bookname"];
      
 
        echo '
	      <tr> 
                  <td>'.$id.'</td> 
                  <td>'.$nm.'</td> 
                  <td>'.$bid.'</td> 
                  <td>'.$bn.'</td> 
                              </tr>';
    }
    $result->free();
}
?>

</body>
</html>