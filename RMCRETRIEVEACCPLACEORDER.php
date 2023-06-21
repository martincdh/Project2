<html>
<head>
<title>Rocky Mountain Curios</title>
</head>
<body>

<h1> Rocky Mountain Curios</h1>
<h2> Account details</h2>
<h3> If your account details are correct, please enter your order details.</h3>

<?php 

// Retrieves account details, autofills details to a html form which is displayed to customer

  $email = $_POST['email'];

 $host = "localhost";
 $user = "root";
 $password = ""; //leave $password as an empty string when you do this in the BGSU lab
 $dbname = "RMC";                               
  
  $cxn = mysqli_connect($host,$user,$password,$dbname)	  
         or die ("couldn't connect to server");

  $query = "SELECT * FROM Customer WHERE custemail = '$email'";	  
  $result = mysqli_query($cxn,$query)
            or die ("Couldn't execute query.");

  $row = mysqli_fetch_assoc($result);           

 print "<form action=\"RMCVALDBEXISTINGCUST.php\" method=\"post\">";

 print "First Name: <input type=\"text\" name=\"fName\" value = \"{$row['custfName']}\" size=\"21\">";

 print " Last Name: <input type=\"text\" name=\"lName\" value = \"{$row['custlName']}\" size=\"21\"><br><br>";

 print "Street Address: <input type=\"text\" name=\"sAddress\"  value = \"{$row['custsAddress']}\" size=\"55\"><br><br>";

 print "City: <input type=\"text\" name=\"city\" value = \"{$row['custcity']}\" size=\"31\">"; 

 print " ZIP: <input type=\"text\" name=\"zip\" value = \"{$row['custzip']}\" size=\"8\">";

 print " State: <input type=\"text\" name=\"state\" value = \"{$row['custstate']}\" size=\"4\"><br><br>";

 print "Email: <input type=\"text\" name=\"email\" value = \"{$row['custemail']}\" size=\"63\"><br><br>";

 print "Number of Wildlife Curios Required: <input type=\"text\" name=\"wQuantity\" size=\"5\" value =\"0\"><br><br>";

 print "Number of Nature Curios Required: <input type=\"text\" name=\"nQuantity\" size=\"5\" value =\"0\"><br><br>";
     
 print "Shipping Method: <select name=\"shipping\">";
 print "<option value=\"0.00\">Select</option>";
 print "<option value=\"10.00\">Flat-Rate Shipping ($10.00)</option>";
 print "<option value=\"15.00\">Expedited Shipping ($15.00)</option>";
 print "<option value=\"25.00\">Next-Day Shipping ($25.00)</option>";
 print "</select><br><br><br>";
     
 print "<input type=\"submit\" value=\"Submit Order\">";
 print "<input type=\"reset\" value=\"Reset Form\">";     

 print "</form>";

?>

</body>
</html>