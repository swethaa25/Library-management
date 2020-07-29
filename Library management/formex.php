<html>
<head>
<title>Welcome</title>
</head>
<body>
<?php include 'database.php' ;?>
<?php
echo "ss";

$result = mysqli_query($connect,"SELECT * from users where empcode='" . $_POST["em2"] . "' and empcode='" . $_POST["pw2"] . "'"); 
$count = mysqli_num_rows($result); 

if ($count==1)
{
echo "hiii";
window.location = "form7.php"; // Redirecting to other page.
return false;
}
else
{
alert("Invalid Email ID or Password");
return false;
}
?>
</body>
</html>