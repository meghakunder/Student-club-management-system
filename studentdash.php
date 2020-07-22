<?php 
session_start();
      if(!isset($_SESSION['sid'])){
      header("Location: student.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
	<style>
	.btn{
		border:1px solid #fff;
		border-radius: 5px;
		padding:10px 30px;
		color: #fff;
		background-color: black;
		text-decoration: none;
		transition: 0.6s ease;
	}
	.main .btn a:hover{
		
		color: green;
	}
	 .container{
    
    color: white;
    border: 1px solid black;
    background: black;
    text-decoration-color: white;
    font-size: 20px;
    position: absolute;
    margin-left: 35%;
    padding:20px;
    top: 30%;
    width: 26%;
    height: auto;
    display: inline;
    text-align: center;
  }
  .container a{
    text-decoration-line: line;
    color: white;
    font-size: 20px;
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
	</style>
</head>
<body style=" background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) , url('public/frontside/images/logbg.png'); background-repeat: no-repeat;background-size: cover;">
<div class="title">
    <h1>STUDENT DASHBOARD</h1>
  </div>
  <div class="main">
  <p style="float:right">
		<a href="logout.php" class="btn">LOGOUT</a>
		</p>
	</div>
	<div class="container">
	<form method="post">
	<?php 

	include('db.php');
	
		$sid=$_SESSION['sid'];
		
			echo'<a href="search.php?sid='.$_SESSION['sid'].'">Upcoming events</a><br>
		    
			';

		 	 
	?>
	</form>
</div>

</body>
</html>