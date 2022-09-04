<?php


if(isset($_POST['username'])){ 
 $server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("connection to this database is failed due to" . mysqli_connect_error());
}

echo "success connecting to the db";

$username=$_POST['username'];
$password=$_POST['password'];
$confirmpass=$_POST['confirmpass'];
$emailid=$_POST['emailid'];
$number=$_POST['number'];
$pref=$_POST['pref'];

$sql= "INSERT INTO `registerc`.`registerc` (`username`, `password`, `confirmpassword`, `emailid`, `mobileno`, `veg/nonveg`, `dt`) 
VALUES ('$username', '$password', '$confirmpass', '$emailid', '$number', '$pref', current_timestamp());";
//alert("username");
echo 'Your name is ' . $username;
if($con->query($sql)==true){
   // echo"sucessfully inserted";
}
else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();
}
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
      <form action="blog.php" method="post"> 
   <input type="text" name="username" placeholder="Username" required>
   <input type="password" name="password" id="p" placeholder="Password" required>
   <input type="password" name="confirmpass" id="confirm_p"placeholder="Confirm password" onblur="confirmPass" required>
   <script type="text/javascript">
        function confirmPass(){
		var pass=document.getElementById("p").value;
		var Cpass=document.getElementById("confirm_p").value;
		if(pass!=Cpass)
		    alert('Wrong confirm password');
		}
   </script>
   <input type="Email" name="emailid" placeholder="Email ID" required>
   <input type="number" name="number" placeholder="Mobile Number" maxlength="10">
   <input type="text"  name="pref" placeholder="Veg/Non-Veg" required>
   <button>Create</button><br>
   </form>
    

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
 