
<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
	<style>
.title{
  position: absolute;
  top:13%;
  left:50%;
  transform:translate(-50%,-50%);
  }
  .title h1{
    color: black;
    font-size: 40px;

  }
  .main{
  	border: 1px solid black;
  	background: black;
  	width: 20%;
  	height: 38%;
  	color: white;
  	text-align: center;
  	padding: 20px;
  	position: absolute;
  	left: 40%;
  	top: 30%;
  }
  .main table tr{
  	width: 20%;
  }
  .main table tr th{
  	width: 45%;
  }
   .main a{
      text-decoration: none;
      font-size: 18px;
      color:#fff;
    }
    .main a:hover{
      color:#39dc79;
    }
	</style>
</head>
<body style=" background-image: url('public/frontside/images/logbg.png'); background-repeat: no-repeat;background-size: cover;">
<div class="title">
	<h1>SELECT OFFICE BEARERS</h1>
</div>
<div class="main">
	<form method="post">
		<table border="1">
	<thead>
	    <tr>
		  <th>Student ID</th>
		  <th>Student Name</th>
		  <th>Select</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		
		
		include('db.php');
		
		$sql = mysqli_query($con,"SELECT * FROM `student`");
		while ($res = mysqli_fetch_array($sql)) 
		{
			echo'
			<tr>
			<td>'.$res['sid'].'</td>
			
			<td>'.$res['sname'].'</td>

			
			

		    <td><a href="selectOB.php?sid=' .$res['sid'].'">Select</a></td>
		    
			</tr>
			';
		 	
		 }

		  ?>
	</tbody>
</table><br>
<a href="mentordash.php">Go Back To Dash Board</a><br>
	</form>
</div>
	
</body>
</html>