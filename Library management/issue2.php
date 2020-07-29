<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<title>ISSUE DETAILS</title>
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
<a class="btn btn-outline-primary" href="issue.php" role="button" style="margin: 5px; " >ISSUE ANOTHER BOOK</a> <button class="btn btn-outline-primary" onclick="func1()">Log Out</a>
</div>

<?php include 'database.php'; ?>

<?php

// create a variable
//$issuedate=$_POST['issuedate'];
//$duedate=$_POST['duedate'];
$bookid=$_POST['bookid'];
//$bookname=mysqli_query($connect,"INSERT INTO issue (bookname) SELECT title FROM allbooks WHERE accno='$bookid'");
//if(mysqli_affected_rows($bookname) > 0){


//$bookname=$_POST['bookname'];

$userid=$_POST['userid'];
//Execute the query


mysqli_query($connect,"INSERT INTO issue (issuedate,bookname,bookid,userid)
		        VALUES (curdate(),(SELECT title FROM allbooks WHERE accno='$bookid'),'$bookid','$userid')");
				

				
	if(mysqli_affected_rows($connect) > 0){
	echo '<script language="javascript">';
	echo '</script>';

	
} else {
	echo " NOT Added<br />";
	echo mysqli_error ($connect);
}

mysqli_query($connect,"INSERT INTO returned (issuedate,bookname,bookid,userid)
		        VALUES (curdate(),(SELECT title FROM allbooks WHERE accno='$bookid'),'$bookid','$userid')");
				


mysqli_query($connect,"DELETE FROM books where accno='$bookid'");
if(mysqli_affected_rows($connect) > 0){
	echo '<script language="javascript">';
	
	echo '</script>';

	
} else {
        mysqli_query($connect,"DELETE FROM issue where bookid='$bookid'and userid='$userid'");
	echo '<b><p align="center">NOT ISSUED</p><b><br />';
	echo mysqli_error ($connect);
}



 
 
echo '<table border="2" align="center" cellspacing="5" cellpadding="5"> 
      <tr> 
          <td> <font face="Arial"><b>Book-ID</font> </td> 
          <td> <font face="Arial"><b>User-ID</font> </td> 
          <td> <font face="Arial"><b>Book Name</font> </td> 
          <td> <font face="Arial"><b>Issue Date</font> </td>  
          
      </tr>';
 $query="SELECT * FROM issue";
if ($result = mysqli_query($connect,$query)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $fn = $row["bookid"];
        $ln = $row["userid"];
        $em= $row["bookname"];
        $pw = $row["issuedate"];
      
 
        echo '<tr> 
                  <td>'.$fn.'</td> 
                  <td>'.$ln.'</td> 
                  <td>'.$em.'</td> 
                  <td>'.$pw.'</td> 
               
              </tr>';
    }
    $result->free();
}
?>

</body>
</html>