<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us" lang="en-us">
	<head>
               
		<title>"Library management system"</title>
                <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
		<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&display=swap" rel="stylesheet">
	
 			</head>
    <style>
	body{


    background-image: url("https://www.pagalguy.com/wp-content/uploads/2018/10/66E98DB2CD8F8840.jpg");
    background-repeat: no-repeat;
    background-size: 1536px 760px;
   color: #000000;
  }
   div.ff
{
  margin: 1% 27%;
  padding: 25px 70px 30px 70px;	
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.8;
  filter: alpha(opacity=60);
}
input[type=text] {
  border: 2px solid blue;
  border-radius: 4px;
}

input[type=password] {
  border: 2px solid blue;
  border-radius: 4px;
}
p
{
font-family: "Times New Roman", Times, serif;
font-size:20px;
font-weight:bold;
}
.btn-btn-primary
{

}

    </style>
	<body >   <link rel="stylesheet" type="text/css" href="bootstrap.css">
<h1 style="color:#3333cc; margin-top:50px; font-family: 'Alfa Slab One', cursive, sans-serif; letter-spacing: 0.3em;" align=center>WELCOME TO CSE LIBRARY</h1>
<div class="ff">

          <center><img src="http://www.sace.ssn.edu.in/wp-content/uploads/2017/05/logo.png" style="max-width:100%"></center><br>

		<section align=center>
 		         <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
			         <tag style="font-weight:bold; margin-right:3%;">Email ID</tag><input type="text" name="login" style="width: 40%; height: 10%; margin-bottom: 2%" ><br>
			          <br>

 			       <tag style="font-weight:bold; margin-right:3%;"> Password</tag><input type="password" name="password" style="width: 40%"; height: 10%">  <br>
 			         <br>


                    <button type="submit" class="btn-btn-primary"><b>LOGIN<b></button>
                   
		          </form>
            </section>
</div>
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
             // collect value of input field
                    $name = $_REQUEST['login'];
                    $paa = $_REQUEST['password'];
                    if (empty($name)) {
                            echo "Name is empty";
                     }
                     if(strcmp($name,'admin@ssn.edu.in')==0 && strcmp($paa,'SSN')==0)
                     {
                        header("Location:form2.php");
                        exit;
                     }
                     else
                    {
                           echo $name.'<br>';
                            $con=mysqli_connect('mysql.ssn.net','shaheenbashas','CSElms@ssn','cse-lms');

                            if(mysqli_connect_errno())
                                 echo mysqli_connect_errno;
                            else
                                 echo 'connected'.'<br>';
                            $query = "SELECT * FROM `users` where email='$name' and empcode='$paa'" ; 

                            // mysql_query will execute the query to fetch data 
                            if ($is_query_run = mysqli_query($con,$query)) 
                            { 
                              // echo "Query Executed"; 
   
                                 if(mysqli_num_rows($is_query_run)>0)
                                 {
                                      // loop will iterate until all data is fetched 
                                      while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
                                     { 
                                            // these four line is for four column 
                                             //echo $query_executed['email'].'          '; 
                                            //echo $query_executed['pass'].'          '; 
                                            session_start();
                                             $_SESSION['id'] = $query_executed['email'];
                                              $_SESSION['pass'] = $query_executed['empcode'];
                                            

                                            
                                            
                                             // Redirect browser 
                                             header("Location:userHome.php"); 
                                             exit;
                                             /*  echo 'Name: '.$query_executed['name'].'<br>'; 
                                             echo 'Department: '.$query_executed['dept'].'<br>';
                                            echo 'Register_no: '.$query_executed['regno'].'<br>'.'<br>';  */ 
                                     } 
                                  }
                                 else
                                     echo 'Enter correct email and password'.'<br>';
                             } 
                             else 
                                 echo "Error in execution <br>"; 

                     }
             }
        ?>
	
	
	</body>
	<footer align=right ><a href="#" style="color:white; opacity:0.5; margin-right: 50px;">Project done by</a></footer>
</html>
