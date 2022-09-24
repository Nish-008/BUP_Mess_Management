<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="update_menu.css">
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <!-- Navbar -->
    <nav>
        
        <ul class = "nav_item">
        <img src="BUP LOGO.png" alt="logo" width = "30" hight="25" class="logo">
            <li class="nav_list"><a href="#">Home</a></li>
            <li class="nav_list"><a href="#">Billing</a></li>
            <li class="nav_list"><a href="#">Food Request</a></li>
            <li class="nav_list"><a href="#">Member Request</a></li>
            <li class="nav_list"><a href="#">Menu</a></li>
            <li class="nav_list"><a href="#">Update Menu</a></li>
            <li class="nav_list"><a href="#">Logout</a></li>

        </ul>
    </nav>

    <div id="main-content">
    <h2>All Records</h2>
    <?php 
      $conn = mysqli_connect("localhost", "root", "", "Mess_Management") or die("Connection Failed");
      $sql = "SELECT * FROM updatemenu";
      $result = mysqli_query($conn, $sql)or die("Query failed");

      if(mysqli_num_rows($result) >0) {

    ?>
    <table cellpadding="7px">
        <thead>
       
        <th>Day</th>
        <th>Meal Type</th>
        <th>Meal Item</th>
        <th>Price</th>
  
        </thead>
        <tbody>
            <?php 
            while($row = mysqli_fetch_assoc($result)){

            ?>
            <tr>
               
                <td><?php echo $row['day']; ?></td>
                <td><?php echo $row['mealType']; ?></td>
                <td><?php echo $row['mealItem']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td>
                    <a href="edit_menu.php?id=<?php echo $row['itemId']; ?>"> Edit</a>
                    <a href="delete.php?id=<?php echo $row['itemId']; ?>">Delete</a>
                </td>
            </tr>
             <?php } ?>
        </tbody>
    </table>

    <a href="add_data.php"><input type = "submit" value= "ADD Item"class="add"></a>
    <?php  } ?>
</div>