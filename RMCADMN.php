<html>
<head>
<title>Rocky Mountain Curios</title>
</head>
<body>

<h1> Rocky Mountain Curios - Administrator</h1>

<hr>
RETRIEVE OPERATIONS
<hr>

<a href="https://localhost/RMCADMNCUST.php">ALL Customer Records</a><br><br>
<a href="https://localhost/RMCADMNORDERS.php">ALL Order Records</a><br><br>


<form action="RMCADMNCUSTSPECIFIC.php" method="post">
Single Customer Record (Enter email of customer): <input type="text" name="email" size="20">
<input type="submit" value="Retrieve Customer Record">
</form>

<form action="RMCADMNORDERSPECIFIC.php" method="post">
Single Order (Enter Order ID): <input type="text" name="orderID" size="20">
<input type="submit" value="Retrieve Order">
</form>

<form action="RMCADMNCUSTSPECIFICORDERS.php" method="post">
Orders placed by a customer (Enter email of customer): <input type="text" name="email" size="20">
<input type="submit" value="Retrieve Orders by a Customer">
</form>

<br><br>
<hr>
DELETE OPERATIONS
<hr>

<form action="RMCADMNCUSTDELETE.php" method="post">
Delete Customer Record (Enter email of customer): <input type="text" name="email" size="20">
<input type="submit" value="Delete Customer Record and ALL corresponding orders">
</form>

<form action="RMCADMNORDERDELETE.php" method="post">
Delete Order (Enter Order ID): <input type="text" name="orderID" size="20">
<input type="submit" value="Delete Order">
</form>


</body>
</html>