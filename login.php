<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
include ("C:/xampp/htdocs/phpfolder/dbconn.php");
$username = $_POST["username"];
$Password1 = $_POST["Password1"];

$login  = false ;
$err = false;
 
     $sql = "Select * from user_info where username = 'username'AND password = 'Password1' "; 
     $result = mysqli_query($conn,$sql);
     $num = mysqli_num_rows($result);
     if ($num == 1){
      $login = true;
    session_start();
    $_SESSION['Logged in'] = true;
    $_SESSION['username'] = $username;
    header("location:home.php");
    }
     else{
      $err =  "Invalid Crendentials.. " ;
     }
 }

?> 
<!DOCTYPE html>
<html lang="en">
<head>


<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  <?php require 'C:\xampp\htdocs\phpfolder\navar.php'
?>
<?php 
if ($login){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You re logged in .
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';}

if ($err ){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>error!</strong> '.$err.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';} 
?>
<div class="container">
<h1 class="text-center">login to our Website!!

</h1></div>
  <div class="container">
<form action = "/phpfolder/login.php" method= "post">
  
  <div class="mb-3 col-md-6 " >
 
    <label for="username" class="form-label  ">username</label>
    <input type="text" class="form-control " id="username" name="username"   placeholder = "Enter username"aria-describedby="emailHelp">
  </div>
  <div class="mb-3 col-md-6 ">
    <label for="Password1" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password1" name="Password1"
    placeholder = "Enter password">
  </div >

  <button type="submit" class="btn btn-primary">login</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>

  

