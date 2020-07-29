<!DOCTYPE HTML>
<html>
<body>
<?php include 'database.php' ; 
$inUsername = $_REQUEST["username"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[] 
$inPassword = $_REQUEST["password"]; 
$res=mysqli_query($connect,"select * from `user` where username='$inUsername' and password='$inPassword';");
if(mysqli_num_rows($res)>0)
{
while ($query_executed = mysqli_fetch_assoc ($res))
{
// these four line is for four column
//echo $query_executed['username'].' ';
//echo $query_executed['password'].' ';
session_start();
$_SESSION['id'] = $query_executed['username'];
// Redirect browser
header("Location:form7.php");exit;
}
}
else echo 'Enter correct email and password';
else echo "Error in execution ";
?>
</body> 
</html>