<html>
<head>
<title>Rocky Mountain Curios</title>
</head>
<body>

<h1> Rocky Mountain Curios - Administrator</h1>
<h2> Delete Customer Record and corresponding Orders </h2>

<?php 

//Deletes specific customer record and corresponding orders

 $email = $_POST['email'];

 $host = "localhost";
 $user = "root";
 $password = ""; //leave $password as an empty string when you do this in the BGSU lab 
 $dbname = "RMC";                               
  
 $cxn = mysqli_connect($host,$user,$password,$dbname)	  
         or die ("couldn't connect to server");

 $query = "DELETE FROM Orders WHERE custemail = '$email'";	  
 $result = mysqli_query($cxn,$query)
            or die ("Couldn't execute query.");
 
 print "<p> Record deleted from orders table for customer $email.<p>"; 


 $query = "DELETE FROM Customer WHERE custemail = '$email'";	  
 $result = mysqli_query($cxn,$query)
            or die ("Couldn't execute query.");

 print "<p> Record deleted from customer table for customer $email.<p>"; 

?>

<br><br>

<a href="https://localhost/RMCADMN.php">Back to Admn Form</a>

</body>
</html>

