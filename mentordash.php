<?php 
session_start();
      if(!isset($_SESSION['mid'])){
      header("Location: mentor.php");}  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mentor Dashboard</title>
	<style>
	.container{
		
		color: white;
		border: 1px solid black;
		background: black;
		text-decoration-color: white;
		font-size: 30px;
		position: absolute;
		margin-left: 38%;
		padding:20px;
		top: 40%;
		width: 20%;
		display: inline;
		text-align: center;
	}
	.container a{
		text-decoration-line: line;
		color: white;
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
	.title{
  position: absolute;
  top: 25%;
  left:50%;
  transform:translate(-50%,-50%);
  }
  .title h1{
    color: black;
    font-size: 40px;

  }
  .container a:hover{
		color: green;
	}
	</style>
</head>
<body style=" background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) , url('public/frontside/images/logbg.png'); background-repeat: no-repeat;background-size: cover;">
	<div class="title">
	<h1>MENTOR DASHBOARD</h1>
	</div>
	<div class="main">
		<ul>
			<li><a href="home.php" class="btn">LOGOUT</a></li>
		</ul>
	</div>
		
	<div class="container">
		<form method="post">
		<?php 
		include('db.php');
		
		
			echo'<a href="addoffice.php?mid=' .$_SESSION['mid'].'">Select Office bearer</a><br>
		    
			';
			echo'<a href="approve.php?mid=' .$_SESSION['mid'].'">Approve Events</a>
		    
			';
		 	
		 
		?>
		
		</form>
	</div>
</body>
</html>