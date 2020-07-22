<?php 
session_start();
      if(!isset($_SESSION['obid'])){
      header("Location: sec.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Select Event</title>
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
    <h1>VIEW EVENTS</h1>
  </div>
<div class="container">
	<form method="post">
		<table border="1">
	<thead>
	    <tr>
	      <th>Event ID</th>
		  <th>Event Name</th>
		   <th>SELECT</th>
		 
		  
		</tr>
	</thead>
	<tbody>
		<?php 
		$obid=$_GET['obid'];
		include('db.php');
		$sql = mysqli_query($con,"SELECT * FROM `officebearer` WHERE obid='$obid'");
		$res = mysqli_fetch_array($sql);
		$cid= $res['cid'];
		$sql1 = mysqli_query($con,"SELECT * FROM `event` WHERE cid='$cid' ");
		
		while ($res1 = mysqli_fetch_array($sql1)) 
		{
			echo'
			<tr>
			<td>'.$res1['eid'].'</td>
			
			<td>'.$res1['ename'].'</td>

			<td><a href="view.php?eid=' .$res1['eid'].'">Select</a></td>
		    
			</tr>
			';
		 	
		 }

		  ?>
	</tbody>
</table>
	</form>
</div>

</body>
</html>