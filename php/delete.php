<?php

echo $item_id = $_GET['id'];


$conn = mysqli_connect("localhost", "root", "", "Mess_Management") or die("Connection failed");

$sql = "DELETE FROM updatemenu WHERE  itemId = {$item_id}" ;
$result = mysqli_query($conn, $sql)or die("Query failed");

header("Location: http://localhost/Mess_Management/menu.php");

mysqli_close($conn);
?>