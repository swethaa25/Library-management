<!DOCTYPE html>
<html>
	<head>
		<title>"Library Management System"</title>
 		     <center>
                
                <h1>Library Management System</h1>
            </center>
	
  <style type="text/css">
.form-group
  {
  margin-left:170px;
  color:white;
  }</style>
  <style type="text/css">
   .form-group form-check
   {
    margin-left:170px;
   }
 </style>


<style type="text/css">
.form-group1
  {
  
  margin-left:170px;
  color:white;
  }</style>
  <style type="text/css">
   .form-group1 form-check1
   {


    margin-left:170px;
	
   }
 </style>

 <style type="text/css">
  .btn-btn-primary
  {
    margin-left:170px;
  }
  body{
    background-image: url("origSSN.jpg");
    background-repeat: no-repeat;
    background-size: 1366px 680px;
  }
 </style>
</head>

 <style type="text/css">
  .btn-btn-secondary
  {

    margin-left:170px;
	
  }
 </style>


	 

<body>

             <center>
                         <img src="http://www.sace.ssn.edu.in/wp-content/uploads/2017/05/logo.png">
 		         <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
			         Login id: <input type="text" name="login" color="#FFFFFF"> <br>
			          <br>

 			        Password: <input type="password" name="password" color="#FFFFFF">  <br>
 			         <br>


                    <button type="submit">Submit</button>
                   
		          </form>
             </center>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
             // collect value of input field
                    $name = $_REQUEST['login'];
                    $paa = $_REQUEST['password'];
                    if (empty($name)) {
                            echo "Name is empty";
                     }
                     if(!(strcmp($name,'admin@ssn.edu.in') && strcmp($paa,'SSN')))
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
</html>
