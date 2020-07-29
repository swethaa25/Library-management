<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<body bgcolor=#FFFFFF>
<br>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><img src="http://www.ssn.edu.in/wp-content/themes/ssn/images/logo.jpg"></h5>
<div class="container">
 <a href="form2.php" class="btn btn-outline-primary">
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

<?php
include("database.php");
$search = $_REQUEST["search"];
$query = "select * from issue where userid=$search";

$result = mysqli_query($connect,$query);

$res=mysqli_num_rows($result);
if(mysqli_num_rows($result)>0)
{
echo "<center><b><u>HISTORY OF USER : </u></b></center>" ;
?>
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<th> ISSUE DATE </th>
<th> BOOK NAME </th>
<th> BOOKID </th>
<th> USER ID </th>

</tr>
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<?php 
$rac = mysqli_fetch_assoc($rack_result);
?>
<td><?php echo $row["issuedate"];?> </td>
<td><?php echo $row["bookname"];?> </td>
<td><?php echo $row["bookid"];?> </td>
<td><?php echo $row["userid"];?> </td>
</tr>
<?php
}
?>
<?php
}
else
echo "<center>No user found in the library by the name $search </center>" ;
?>
</table>
</body>
</html>
<br>