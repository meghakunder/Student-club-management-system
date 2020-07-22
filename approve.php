<?php 
session_start();
      if(!isset($_SESSION['mid'])){
      header("Location: mentor.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Approval</title>
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
		top: 30%;
		left: 35%
	}
	.container a{
		font-size: 18px;
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
	</style>
</head>
<body style=" background-image: url('public/frontside/images/logbg.png'); background-repeat: no-repeat;background-size: cover;">
<div class="title">
	<h1>MENTOR APPROVAL</h1>
</div>
	<div class="container">
	<form method="post">
		<table border="1">
	<thead>
	    <tr>
	      <th>Event ID</th>
		  <th>Event Name</th>
		  <th>Event Description</th>
		  <th>Event Date</th>
		   <th>Approve</th>
		 
		  
		</tr>
	</thead>
	<tbody>
		<?php 
		$mid=$_GET['mid'];
		include('db.php');
		$sql = mysqli_query($con,"SELECT * FROM `mentor` WHERE mid='$mid'");
		$res = mysqli_fetch_array($sql);
		$cid= $res['cid'];
		$zero=0;
		$sql1 = mysqli_query($con,"SELECT * FROM `event` WHERE cid='$cid' AND approval='$zero' ");
		
		while ($res1 = mysqli_fetch_array($sql1)) 
		{
			$_SESSION['eid']=$res1['eid'];
			echo'
			<tr>
			<td>'.$_SESSION['eid'].'</td>
			
			<td>'.$res1['ename'].'</td>

			<td>'.$res1['edesp'].'</td>

			<td>'.$res1['date'].'</td>

			 <td><a href="app.php?mid=' .$_SESSION['mid'].'&eid='.$_SESSION['eid'].'">Approve</a></td>
		    
			</tr>
			';
		 	
		 }

		  ?>
	</tbody>
</table><br>
	</form>


<a href="mentordash.php">Go Back To Dash Board</a>
</div>
</body>
</html>