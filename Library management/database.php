<?php
$connect=mysqli_connect('mysql.ssn.net','shaheenbashas','CSElms@ssn','cse-lms');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>