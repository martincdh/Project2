<html>
<head>
<title>Rocky Mountain Curios</title>
</head>
<body>

<h1> Rocky Mountain Curios </h1>


<?php 

// Receives user form data from RMCRETRIEVEACCPLACEORDER.php

//Validity checking

$okay = true;

if (empty($_POST['fName'])) {
	print '<p><font color = "red">Please enter your first name.</p>';
	$okay = false;
}


if (empty($_POST['lName'])) {
	print '<p><font color = "red">Please enter your last name.</p>';
	$okay = false;
}


if (empty($_POST['sAddress'])) {
	print '<p><font color = "red">Please enter your street address.</p>';
	$okay = false;
}


if (empty($_POST['city'])) {
	print '<p><font color = "red">Please enter your city.</p>';
	$okay = false;
}


if (!is_numeric($_POST['zip']) || (strlen($_POST['zip']) != 5)){

	print '<p><font color = "red">Please enter a 5-digit zip code.</p>';
	$okay = false;
}

if (($_POST['state']) == "SE") {
	print '<p><font color = "red">Please select a state.</p>';
	$okay = false;
}


if (empty($_POST['email'])) {
	print '<p><font color = "red">Please enter your email.</p>';
	$okay = false;
}

if (($_POST['wQuantity']) < 0 || ($_POST['wQuantity']) > 5) {
	print '<p><font color = "red">The number of wildlife curios must be between 0 and 5.</p>';
	$okay = false;
}

if (($_POST['nQuantity']) < 0 || ($_POST['nQuantity']) > 7) {
	print '<p><font color = "red">The number of nature curios must be between 0 and 7.</p>';
	$okay = false;
}

if (($_POST['wQuantity']) == 0 && ($_POST['nQuantity']) == 0) {
	print '<p><font color = "red">Please select the number of curios to be purchased.</p>';
	$okay = false;
}

if (($_POST['shipping']) == 0.00) {
	print '<p><font color = "red">Please select a shipping method.</p>';
	$okay = false;
}


if($okay){

//Data input from form
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$sAddress = $_POST['sAddress'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$state = $_POST['state'];
$email = $_POST['email'];
$wQuantity = $_POST['wQuantity'];
$nQuantity = $_POST['nQuantity'];
$shipping = $_POST['shipping'];


//Constants
$wPrice = 20.50;
$nPrice = 15.70;
$tax = .065;

//Data processing
$wTotal = $wQuantity * $wPrice;
$wTotal = number_format($wTotal, 2);

$nTotal = $nQuantity * $nPrice;
$nTotal = number_format($nTotal, 2);

$total = $wTotal + $nTotal;

$taxAmount = $total * $tax;
$taxAmount = number_format($taxAmount, 2);

$total = $total + $taxAmount + $shipping;
$total = number_format($total, 2);


//Writing to the Orders table


 $host = "localhost";
 $user = "root";
 $password = ""; //leave $password as an empty string when you do this in the BGSU lab
 $dbname = "RMC";                               
  
  $cxn = mysqli_connect($host,$user,$password,$dbname)	  
         or die ("couldn't connect to server");

//Preparing the SQL query for inserting a data record into Orders table and assigning it to a php variable

 $query = "INSERT INTO Orders VALUES (NULL, '{$email}', '{$wQuantity}', '{$nQuantity}', '{$wTotal}', '{$nTotal}', '{$taxAmount}', '{$shipping}', '{$total}')";

 $resultOrders = mysqli_query($cxn,$query)
      or die ("Couldn't execute query");


// Output to browser

print "<b>$fName $lName</b><br>
$sAddress<br> 
$city, $state $zip<br><br>

Dear $fName $lName,<br><br>
Thank you for your order of $wQuantity wildlife curio(s) and $nQuantity nature curio(s). We appreciate your patronage!! The total cost of your order is $$total. The details are shown below.<br><br>

Wildlife Curios: $$wTotal<br> 
Nature Curios: $$nTotal<br>
Tax: $$taxAmount<br> 
Shipping: $$shipping<br>
Total: $$total<br>

<p>Thank you!</p>";

}

?>

<a href="https://localhost/RMCForm.php">Back to Form</a>

</body>
</html>