<?php
/*
if(isset($_POST['username'])){ */
    $server = "localhost";
   $username = "root";
   $password = "";
   $database = "registerc";
   
   $con = mysqli_connect($server,$username,$password,$database);
   
   if(!$con){
       die("connection to this database is failed due to" . mysqli_connect_error());
   }
   

   

   

   $res = 2;
    $username=$_POST['username'];
   // echo $username;
    $password=$_POST['password']; 
   // echo $password; 
   $sql = "SELECT * FROM `registerc`";
  //mysql_select_db('registerc');
   $retval = mysqli_query($con, $sql );
   $num = mysqli_num_rows($retval);
   if($num>0)
   {
      while($row = mysqli_fetch_assoc($retval)){
      if($username == $row['username'])
      {
         if($password == $row['password'])
         {
            $res = 1;
            header("Location:http://localhost/foodshala/loginAsCustomer.html");
         }
         else{
            $res = 0;
         }
      }
      echo "<br>";
      echo "<br>";
      }
   }
   if($res == 0){
      echo '<script>alert("Incorrect Password or username")</script>';
   }
   
 /*  if(! $retval ) {
       echo "success";
  // die('Could not get data: ' . mysqli_error());
   }
  else{
  echo "not success";
  }

while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
   echo "success dhairya";
}


   if($con->query($sql)==true){
       echo"sucessfully inserted";
   }
   else{
       echo "ERROR: $sql <br> $con->error";
   }
   
   $con->close();*/
  // }
?>







<!DOCTYPE html>
<html>
<head>
<title> Login or Register </title>
<link rel="stylesheet" href="style.css">
<style>
body{
   background-image:url('login.png');
}
</style>
</head>
<body>
  
 <div class="login-page"> 
 <div class="form">
 <form class="login-form" action="about.php" method="post">
 <input type="text" name="username" placeholder="Username" required>
 <input type="password" name="password" placeholder="Password" required>
 <!--<form action="index.html"> -->
 <button>login
 </button>
 <!-- </form>-->
 </div>
 </div>


    <script src='https://code.jquery.com/jquery-3.2.1.min.js'> </script>
 
 <script>
 $('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
 
 </script>
</body>
</html>
 