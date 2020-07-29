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
<a class="btn btn-outline-primary" href="deleteuser.php" role="button" style="margin: 5px; " >DELETE ANOTHER USER</a>
  <button class="btn btn-outline-primary" onclick="func1()">Log Out</a>
</div>

<?php include 'database.php'; ?>

<?php

// create a variable
$empcode=$_POST['empcode'];
$name=$_POST['name'];
$designation=$_POST['designation'];
$email=$_POST['email'];

//Execute the query


mysqli_query($connect,"delete from users where empcode='$empcode' or email='$email'");
				
	if(mysqli_affected_rows($connect) > 0){
	echo '<script language="javascript">';
	echo 'alert("User deleted")';
	echo '</script>';

	
} else {
	echo "User NOT Added<br />";
	echo mysqli_error ($connect);
}


 
 
echo '<table border="2" align="center" cellspacing="5" cellpadding="5"> 
      <tr> 
          <td> <font face="Arial"><b>User-ID</font> </td>
          <td> <font face="Arial"><b>Name</font> </td> 
          <td> <font face="Arial"><b>Designation</font> </td>  
 
          <td> <font face="Arial"><b>Email-ID</font> </td>  

      </tr>';
 $query="SELECT * FROM users";
if ($result = mysqli_query($connect,$query)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $fn = $row["empcode"];
        $ln = $row["name"];
        $em = $row["designation"];
        $pw = $row["email"];
 
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