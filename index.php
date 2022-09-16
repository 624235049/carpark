<?php
session_start();
error_reporting(0);
include('dbconn.php');
include('navigation.php.php');
include('sidebar.php');
include('navigation.php');

// if(isset($_POST['login']))
//   {
//     $adminuser=$_POST['username'];
//     $password=md5($_POST['password']);
//     $query=mysqli_query($con,"SELECT ID from admin where  UserName='$adminuser' && Password='$password' ");
//     $ret=mysqli_fetch_array($query);
//     if($ret>0){
//       $_SESSION['vpmsaid']=$ret['ID'];
//      header('location:dashboard.php');
//     }
//     else{
//     $msg="Login Failed !!";
//     }
//   }
// ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vehicle Parking System</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
