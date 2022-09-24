<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'adminhome';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM userdata ORDER BY noofmeals DESC ";
$result = $mysqli->query($sql);

$sql1 = " SELECT COUNT(mealtype) as total1 FROM userdata WHERE mealtype='Breakfast'; ";
$result1 = $mysqli->query($sql1);
$data1=$result1->fetch_assoc();

$sql2 = " SELECT COUNT(mealtype) as total2 FROM userdata WHERE mealtype='Lunch'; ";
$result2 = $mysqli->query($sql2);
$data2=$result2->fetch_assoc();
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oleo Script Swash Caps">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>    
        <div class="bg">
            <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html"><img src="iamges/Bangladesh_University_of_Professionals_(BUP)_Logo.svg" alt="" style="width: 50px;"></a>
    <button 
    class="navbar-toggler" 
    type="button" 
    data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" 
    aria-expanded="false" 
    aria-label="Toggle navigation"
    >
    <span class="navbar-toggler-icon">   
    <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
    </span>
      <!-- <span class="navbar-toggler-icon"></span> -->
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav  navbar-edit">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Billing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Food Request</a>
          </li>	
          <li class="nav-item">
            <a class="nav-link" href="#">Member Request</a>
          </li>	
          <li class="nav-item">
            <a class="nav-link" href="#">Update Menu</a>
          </li>	
          <li class="nav-item">
            <a class="nav-link" href="#">LogOut</a>
          </li>
      </ul>
    </div>
  </div>
</nav>



<!-- <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html"><img src="images/Bangladesh_University_of_Professionals_(BUP)_Logo.svg" alt="" style="width: 50px;"></a>
  
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav navbar-edit">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Billing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Food Request</a>
          </li>	
          <li class="nav-item">
            <a class="nav-link" href="#">Member Request</a>
          </li>	
          <li class="nav-item">
            <a class="nav-link" href="#">Update Menu</a>
          </li>	
          <li class="nav-item">
            <a class="nav-link" href="#">LogOut</a>
          </li>				
        </ul>		  
      </div>
    </div>
  </nav> -->
            <p id="mess" class="display-6">Officers' Mess</p>
            <div class="box1" id="bg-img">
                  <section class="table1">
                    <table class="table">
                      <tr>
                        <td>Name of the employee</td>
                        <td>Employee ID</td>
                        <td>Meal Type</td>
                        <td>No of Meals</td>
                        <td>Date</td>
                      </tr>
                      <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                      <?php
                        // LOOP TILL END OF DATA
                        while($rows=$result->fetch_assoc())
                        {
                      ?>
                      <tr>
                        <!-- FETCHING DATA FROM EACH
                          ROW OF EVERY COLUMN -->
                        <td><?php echo $rows['empname'];?></td>
                        <td><?php echo $rows['empid'];?></td>
                        <td><?php echo $rows['mealtype'];?></td>
                        <td><?php echo $rows['noofmeals'];?></td>
                        <td><?php echo $rows['date'];?></td>
                      </tr>
                      <?php
                        }
                      ?>
                    </table>
                  </section>
                  <div>
                    <div class="box2" id="breakfast">
                        Total Breakfast: <br>
                        2
                    </div>
                    <div class="box2" id="lunch">
                        Total Lunch: <br>
                        2
                    </div>
                  </div>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>