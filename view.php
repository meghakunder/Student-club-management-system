<?php 
session_start();
      if(!isset($_SESSION['obid'])){
      header("Location: sec.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrations</title>
	<style>
		.container{
    
    color: white;
    border: 1px solid black;
    background: black;
    text-decoration-color: white;
    font-size: 20px;
    position: absolute;
    margin-left: 38%;
    padding:20px;
    top: 30%;
    width: 20%;
    height: auto;
    display: inline;
    text-align: center;
  }
  .container a{
    text-decoration-line: line;
    color: white;
    font-size: 20px;
  }
.container a:hover{
	color: green;
}
    .title{
  
  position: absolute;
  top:18%;
  left:50%;
  transform:translate(-50%,-50%);
  }
  .title h1{
    color: black;
    font-size: 40px;

  }
  
	</style>
</head>
<body style=" background-image:url('public/frontside/images/logbg.png'); background-repeat: no-repeat;background-size: cover;">
  <div class="title">
    <h1>VIEW REGISTRATIONS</h1>
  </div>
<div class="container">
	<form method="post">
		<table border="1">
	<thead>
	    <tr>
	      <th>SI no.</th>
		  <th>Student ID</th>
		  <th>Student Name</th>
		  <th>Department</th>		 
		  
		</tr>
	</thead>
	<tbody>
		<?php 
		
		$eid=$_GET['eid'];
		include('db.php');
		$sql1 = mysqli_query($con,"SELECT * FROM `register` WHERE eid='$eid' ");
		
		
		
		
		while ($res1 = mysqli_fetch_array($sql1)) 
		{ 
			$sid=$res1['sid'];
			$sql2 = mysqli_query($con,"SELECT * FROM `student` WHERE sid='$sid' ");
			$res2 = mysqli_fetch_array($sql2);
			$dno=$res2['dno'];
			$sql3 = mysqli_query($con,"SELECT * FROM `department` WHERE dno='$dno' ");
			$res3 = mysqli_fetch_array($sql3);
			$counter=1;

			echo'
			<tr>
			<td>' .$counter. '</td>
			<td>'.$res1['sid'].'</td>
			
			<td>'.$res2['sname'].'</td>

			<td>'.$res3['dname'].'</td>
 
			</tr>

			';
			$counter++;
		 	
		 }

		  ?>
	</tbody>
</table><br>
<a href="secdash.php">Go Back To Dash Board</a>
	</form>
</div>

</body>
</html>