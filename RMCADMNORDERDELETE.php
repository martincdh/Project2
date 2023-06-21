<html>
<head>
<title>Rocky Mountain Curios</title>
</head>
<body>

<h1> Rocky Mountain Curios - Administrator</h1>
<h2> Delete Specific Order </h2>

<?php 

// Deletes specific order

 $orderID = $_POST['orderID'];

 $host = "localhost";
 $user = "root";
 $password = ""; //leave $password as an empty string when you do this in the BGSU lab
 $dbname = "RMC";                               
  
 $cxn = mysqli_connect($host,$user,$password,$dbname)	  
         or die ("couldn't connect to server");

 $query = "DELETE FROM Orders WHERE orderID = $orderID";	  
 $result = mysqli_query($cxn,$query)
            or die ("Couldn't execute query.");

 print "<p> Record deleted from orders table for orderID $orderID.<p>"; 

?>

<br><br>
<a href="https://localhost/RMCADMN.php">Back to Admn Form</a>

</body>
</html>





