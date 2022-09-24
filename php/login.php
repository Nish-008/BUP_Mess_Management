<?php 

$host="localhost";
$user="root";
$password="";
$db="members";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $pass=$_POST['password'];
    
    $sql="select * from login_form where username='".$uname."'AND pass='".$pass."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo "You Have Successfully Logged in";
        //print "<h2>You Have Successfully Logged in!</h2>";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        //print "<h2>You Have Entered wrong password!</h2>";
        exit();
    }
        
}
?>