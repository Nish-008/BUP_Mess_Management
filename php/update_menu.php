<!DOCTYPE html>
<html lang="en">
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


<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="" />
            <input type="text" name="sname" value="" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="" />
        </div>
        <div class="form-group">
        <label>Class</label>
        <select name="sclass">
            <option value="" selected disabled>Select Class</option>
            <option value="1">BCA</option>
            <option value="2">BSC</option>
            <option value="3">B.TECH</option>
        </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
</div>
</div>
</body>
</html>

</body>
</html>