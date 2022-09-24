<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
<div id="main-content">
    <h2>Add New Record</h2>
    <?php
      $conn = mysqli_connect("localhost", "root", "", "Mess_Management") or die("Connection failed");

    

       $sql = "SELECT * FROM updatemenu";
       $result = mysqli_query($conn, $sql)or die("Query failed");
       
    ?>
    <form class="post-form" action="save_data.php" method="post">
        <div class="form-group">
            <label>Day</label>
            <input type="text" name="day" />
        </div>
        <div class="form-group">
            <label>Meal Type</label>
            <input type="text" name="mealType" />
        </div>
        <!-- <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                <option value="1">BCA</option>
                <option value="2">BSC</option>
                <option value="3">B.TECH</option>
            </select>
        </div> -->
        <div class="form-group">
            <label>Meal Item</label>
            <input type="text" name="mealItem" />
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>

</body>
</html>