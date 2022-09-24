<?php

$day=$_POST['day'];
$meal_type=$_POST['mealType'];
$meal_item=$_POST['mealItem'];
$price=$_POST['price'];

$conn = mysqli_connect("localhost", "root", "", "Mess_Management") or die("Connection Failed");

$sql = "INSERT INTO updatemenu(day,mealType, mealItem,price) VALUES ('{$day}', '{$meal_type}','{$meal_item}','{$price}')";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");



header("Location: http://localhost/Mess_Management/menu.php");

mysqli_close($conn);

?>