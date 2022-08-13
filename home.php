<?php
session_start();
if (!isset($_SESSION['Logged in ']) || ($_SESSION['Logged in '])!=true){

    header("location:login.php");
    exit();
}
echo "welcome";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home<?php $_SESSION['$username']?></title>
</head>
<body>
home<?php $_SESSION['$username']?>
<?php require 'C:\xampp\htdocs\phpfolder\navar.php'
?>
</body>
</html>