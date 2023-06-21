<html>
<head>
<title>Rocky Mountain Curios</title>
</head>
<body>

<h1> Rocky Mountain Curios - Administrator</h1>
<h2> Order Records </h2>

<?php 

// Retrieves order details

 $host = "localhost";
 $user = "root";
 $password = ""; //leave $password as an empty string when you do this in the BGSU lab
 $dbname = "RMC";                               
  
  $cxn = mysqli_connect($host,$user,$password,$dbname)	  
         or die ("couldn't connect to server");


  $query = "SELECT * FROM Orders";	  
  $result = mysqli_query($cxn,$query)
            or die ("Couldn't execute query.");	 

//Printing DB table as a html table

 print "<table width='100%' border='1'>";
 print "<tr><th>Order ID</th><th>Email</th><th>W Curios</th><th>N Curios</th><th>W Cost</th><th>N Cost</th><th>Tax</th><th>Ship</th><th>Total</th></tr>";

 while($row = mysqli_fetch_assoc($result))           
 {
 
//Display one record for each iteration of the loop
   print "<tr><td>{$row['orderID']}</td><td>{$row['custemail']}</td><td>{$row['wQuantity']}</td><td>{$row['nQuantity']}</td>";
   print "<td>{$row['wTotal']}</td><td>{$row['nTotal']}</td><td>{$row['taxAmount']}</td><td>{$row['shipping']}</td><td>{$row['total']}</td></tr>";
 }

 print "</table>";

?>

<br><br>

<a href="http://localhost/RMCADMN.php">Back to Admn Form</a>

</body>
</html>

