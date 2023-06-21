<html>
<head>
<title>Rocky Mountain Curios</title>
</head>
<body>

<h1> Rocky Mountain Curios - Administrator</h1>
<h2> Customer Records </h2>

<?php 

// Retrieves customer details

 $host = "localhost";
 $user = "root";
 $password = ""; //leave $password as an empty string when you do this in the BGSU lab
 $dbname = "RMC";                               
  
 $cxn = mysqli_connect($host,$user,$password,$dbname)	  
         or die ("couldn't connect to server");


 $query = "SELECT * FROM Customer";	  
 $result = mysqli_query($cxn,$query)
            or die ("Couldn't execute query.");	 


//Printing DB table as a html table 

 print "<table width='100%' border='1'>";
 print "<tr><th>Email</th><th>First Name</th><th>Last Name</th><th>Street Address</th><th>City</th><th>ZIP</th><th>State</th></tr>";

 while($row = mysqli_fetch_assoc($result))           
 {
 
//Display one record for each iteration of the loop
   print "<tr><td>{$row['custemail']}</td><td>{$row['custfName']}</td><td>{$row['custlName']}</td>";
   print "<td>{$row['custsAddress']}</td><td>{$row['custcity']}</td><td>{$row['custzip']}</td><td>{$row['custstate']}</td></tr>";
 }

 print "</table>";

?>

<br><br>

<a href="https://localhost/RMCADMN.php">Back to Admn Form</a>

</body>
</html>



