<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<title>BOOK DETAILS</title>
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
  <button class="btn btn-outline-primary" onclick="func1()">Log Out</a>
</div>

<?php include 'database.php'; ?>

<?php
$acno = $_POST['accno'];
mysqli_query($connect,"INSERT INTO books(sno,accno,title,author,publication,price)
		        VALUES ((SELECT sno FROM allbooks WHERE accno='$acno'),'$acno',(SELECT title FROM allbooks WHERE accno='$acno'),(SELECT author FROM allbooks WHERE accno='$acno'),(SELECT publication FROM allbooks WHERE accno='$acno'),(SELECT price FROM allbooks WHERE accno='$acno'))");

				

				
	if(mysqli_affected_rows($connect) > 0){
	echo '<script language="javascript">';
	echo '</script>';

	
} else {
	echo " NOT Added<br />";
	echo mysqli_error ($connect);
}

mysqli_query($connect,"delete from returned where bookid='$acno'");
 
echo '<table border="2" align="center" cellspacing="5" cellpadding="5"> 
      <tr> 
	  <td> <font face="Arial"><b>S.No</font> </td> 
          <td> <font face="Arial"><b>Acc.No</font> </td> 
          <td> <font face="Arial"><b>Book Title</font> </td> 
          <td> <font face="Arial"><b>Author</font> </td> 
          <td> <font face="Arial"><b>Publication</font> </td>  
         <td> <font face="Arial"><b>Price</font> </td> 
      </tr>';
 $query="SELECT * FROM books";
if ($result = mysqli_query($connect,$query)) {
    while ($row = mysqli_fetch_assoc($result)) {
         $sno = $row["sno"];
         $accno = $row["accno"];
        $title = $row["title"];
        $author = $row["author"];
        $publication= $row["publication"];
        $price = $row["price"];
 
        echo '<tr> 
                  <td>'.$sno.'</td> 
                  <td>'.$accno.'</td> 
                  <td>'.$title.'</td> 
                  <td>'.$author.'</td> 
		  <td>'.$publication.'</td> 
 		  <td>'.$price.'</td> 		
              </tr>';
    }
    $result->free();
}
?>

</body>
</html>