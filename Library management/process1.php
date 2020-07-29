<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<title>BOOK DETAILS</title>
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
<a class="btn btn-outline-primary" href="form4.php" role="button" style="margin: 5px; " >ADD ANOTHER BOOK</a>
  <button class="btn btn-outline-primary" onclick="func1()">Log Out</a>
</div>

<?php include 'database.php'; ?>

<?php

// create a variable
$sno=$_POST['sno'];
$accno=$_POST['accno'];
$title=$_POST['title'];
$author=$_POST['author'];
$publication=$_POST['publication'];
$price=$_POST['price'];
$rack=$_POST['rack'];

//Execute the query


mysqli_query($connect,"INSERT INTO books (sno,accno,title,author,publication,price)
		        VALUES ('$sno','$accno','$title','$author','$publication','$price')");


				
	if(mysqli_affected_rows($connect) > 0){
	echo '<script language="javascript">';
	echo 'alert("Books Added")';
	echo '</script>';

	
} else {
	echo "Book NOT Added<br />";
	echo mysqli_error ($connect);
}

mysqli_query($connect,"INSERT INTO rack (rack,accno)
		        VALUES ('$rack','$accno')");


				
	if(mysqli_affected_rows($connect) > 0){
	echo '<script language="javascript">';
	echo 'alert("rack Added")';
	echo '</script>';

	
} else {
	echo "Rack NOT Added<br />";
	echo mysqli_error ($connect);
}



 
 
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