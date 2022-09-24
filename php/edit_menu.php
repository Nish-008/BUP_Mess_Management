<!DOCTYPE html>
<htm lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Menu</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <!-- Navbar -->
    <nav>
        <ul class = "nav_item">
            <li class="nav_list"><a href="#">Home</a></li>
            <li class="nav_list"><a href="#">Billing</a></li>
            <li class="nav_list"><a href="#">Food Request</a></li>
            <li class="nav_list"><a href="#">Member Request</a></li>
            <li class="nav_list"><a href="#">Menu</a></li>
            <li class="nav_list"><a href="#">Update Menu</a></li>
            <li class="nav_list"><a href="#">Logout</a></li>

        </ul>
    </nav>




<!-- Form -->

<div id="main-content">
    <h2>Update Record</h2>
    <?php
      $conn = mysqli_connect("localhost", "root", "", "Mess_Management") or die("Connection failed");

       $item_id = $_GET['id'];
       $sql = "SELECT * FROM updatemenu WHERE itemId = {$item_id}";
       $result = mysqli_query($conn, $sql)or die("Query failed");

       if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){

       
    ?>
    <form class="post-form" action="updatedata.php" method="post">

      <div class="form-group">
          <label>Day</label>
          <input type="hidden" name="itemId" value="<?php echo  $row['itemId']; ?>"/>
          <input type="text" name="day" value="<?php echo  $row['day']; ?>"/>
      </div>
     
      <div class="form-group">
          <label>Meal Type</label>
          <input type="text" name="mealType" value="<?php echo  $row['mealType']; ?>"/>
      </div>

      <div class="form-group">
          <label>Meal Item</label>
          <input type="text" name="mealItem" value="<?php echo  $row['mealItem']; ?>"/>
      </div>
      <div class="form-group">
          <label>Price</label>
          <input type="text" name="price" value="<?php echo  $row['price']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php }
    }?>
</div>
</div>

</body>
</html>