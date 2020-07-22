<?php 
session_start();
      if(!isset($_SESSION['obid'])){
      header("Location: sec.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Office Bearer Dashboard</title>
	<style>
	.container{
		border: 1px solid black;
		background: black;
		color: white;
		width: 30%;
		height: auto;
		padding: 20px;
		text-align: center;
		position: absolute;
		top: 35%;
		left: 35%
	}
	.container a{
		font-size: 22px;
		color: white;

	}
	.container a:hover{
		color: green;
	}
	.title{
  position: absolute;
  top: 20%;
  left:50%;
  transform:translate(-50%,-50%);
  }
  .title h1{
    color: black;
    font-size: 40px;

  }
  .main{
  	padding-bottom: 20px;
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
</style>
</head>
<body style=" background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) , url('public/frontside/images/logbg.png'); background-repeat: no-repeat;background-size: cover;">
<div class="main">
	<p style="float:right">
		<a href="logout.php" class="btn">LOGOUT</a>
		</p>
</div>
<div class="title">
	<h1>OFFICE BEARER DASHBOARD</h1>
</div>
<div class="container">
	<form method="post">

	
	
	<?php 
	include('db.php');
	
		$bid=$_SESSION['obid'];
		
			echo'<a href="hallbooking.php?obid='.$_SESSION['obid'].'">Book hall for your event</a><br><br>
		    
			';

		 	 echo'<a href="event.php?obid='.$_SESSION['obid'].'">Add new event</a><br><br>
		    
			';
			echo'<a href="viewevent.php?obid='.$_SESSION['obid'].'">View Registrations</a><br><br>
		    
			';
			echo'<a href="close.php?obid='.$_SESSION['obid'].'">Close Registrations</a>
		    
			';
	?>
	</form>
</div>

</body>
</html>