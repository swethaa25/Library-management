<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<title>REPORT</title>
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
 <a href="userHome.php" class="btn btn-outline-primary">
          <span class="glyphicon glyphicon-home"></span> Home
        </a></div>

  <nav class="my-2 my-md-0 mr-md-3">
  </nav>

  <button class="btn btn-outline-primary" onclick="func1()">Log Out</a>
</div>

<?php include 'database.php'; ?>


<?php session_start();
$paa=$_SESSION['pass'];
// create a variable
//$fromdate=$_POST['fromdate'];
//$todate=$_POST['todate'];

//Execute the query

echo '<b><p align="center">RETURNED</p><b>';
mysqli_query($connect,"SELECT issue.issuedate,issue.bookname,issue.bookid,issue.userid FROM issue LEFT JOIN returned ON issue.userid=returned.userid WHERE returned.userid='$paa'");
				
	if(mysqli_affected_rows($connect) > 0){
	echo '<script language="javascript">';
	echo '</script>';
} else {
	echo "error in viewing history<br />";
	echo mysqli_error ($connect);
}


 
 
echo '<table border="2" align="center" cellspacing="5" cellpadding="5"> 
      <tr> 
          <td> <font face="Arial"><b>Issue Date</font> </td> 
          <td> <font face="Arial"><b>User ID</font> </td> 
          <td> <font face="Arial"><b>Book ID</font> </td> 
          <td> <font face="Arial"><b>Book Name</font> </td>
           
      </tr>';
$query="SELECT issue.issuedate,issue.bookname,issue.bookid,issue.userid FROM issue where bookid not in(select bookid from returned where userid='$paa') and issue.userid='$paa'";

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