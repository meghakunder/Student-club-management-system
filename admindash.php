<?php 
session_start();
      if(!isset($_SESSION['aid'])){
      header("Location: admin.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<style>
	.button{
		position:absolute;
		top: 60%;
		right: 35%;
		transform: translate(-50%,-50%);
		text-align: center;
	}
	.btn{
		border:1px solid #fff;
		border-radius: 5px;
		padding:10px 30px;
		color: #fff;
		background-color: black;
		text-decoration: none;
		transition: 0.6s ease;
	}
	.btn:hover{
		background-color: #fff;
		color:#000;
	}
	.main{
		margin: auto;
	}
	ul{
		float: right;
		list-style-type: none;
		margin-top: 25px;
		padding-bottom: 20px;
	}
	ul li{
		display: initial;
	}
	.title{
	position: absolute;
	top:25%;
	left:50%;
	transform:translate(-50%,-50%);
	}
	.title h1{
		color: black;
		font-size: 40px;

	}

	
	</style>

</head>
<body style=" background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('public/frontside/images/logbg.png'); background-repeat: no-repeat;background-size: cover;">
	<div class="title">
		<h1>ADMIN DASHBOARD</h1>
	</div>
	<div class="button">
		<form method="post">
		<a href="adddepartment.php" class="btn">Add New Department</a><br><br><br>
		<a href="addstaff.php" class="btn">Add New Staff</a><br><br><br>
		<a href="addstudent.php" class="btn">Add New Student</a><br><br><br>
		<a href="addclub.php" class="btn">Add New Club</a><br><br><br>
		<a href="addmentor.php" class="btn">Select Mentors</a><br><br><br>
		</form>
	</div>
	<div class="main">
		<ul>
			<li><a href="logout.php" class="btn">LOGOUT</a></li>
		</ul>
	</div>
</body>
</html>