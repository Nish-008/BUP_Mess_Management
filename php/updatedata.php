<?php

$item_id= $_POST['itemId'];
$day=$_POST['day'];
$meal_type=$_POST['mealType'];
$meal_item=$_POST['mealItem'];
$price=$_POST['price'];

$conn = mysqli_connect("localhost", "root", "", "Mess_Management") or die("Connection Failed");

$sql = "UPDATE updatemenu SET day = '{$day}', mealType = '{$meal_type}', mealItem = '{$meal_item}', price = '{$price}' WHERE itemId = '{$item_id}' ";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/Mess_Management/menu.php");

mysqli_close($conn);

?>