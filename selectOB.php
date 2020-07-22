<?php 
session_start();
      if(!isset($_SESSION['mid'])){
      header("Location: mentor.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirm</title>
	<style>
	.main{
		border: 1px solid black;
		background: black;
		color: white;
		width: 20%;
		height: 35%;
		text-align: center;
		padding: 20px;
		margin-left: 38%;
		margin-top: 15%;
	}
	.title{
	position: absolute;
	top:20%;
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
	<h1>SELECT OFFICE BEARER</h1>
</div>
<div class="main">
	<?php 
	$sid = $_GET['sid'];
	include('db.php');

	$sql = mysqli_query($con,"SELECT * FROM `student` WHERE sid='$sid'");
	$res = mysqli_fetch_array($sql);
	 ?>
	 <form method="post">
		 <label>Student ID</label> 
		 <input type="number" name="sid" readonly value="<?php echo $res['sid'] ?>"><br><br>
   	     <label>Student Name</label>  
   	     <input type="text" name="sname" readonly value="<?php echo $res['sname'] ?>"><br><br>
	     <label>Password</label>  
   	     <input type="password" name="password" required><br><br> 
	     <input type="submit" name="add" value="Insert">
</div>
</body>
</html>
<?php 
include('db.php');
 if(isset($_POST['add']))
 {
 $mid=$_SESSION['mid'];
$result = mysqli_query($con,"SELECT cid from `mentor` where mid ='$mid'");
$row = mysqli_fetch_array($result);
$cid = $row['cid']; 
$sid =$_POST['sid'];

$obname =$_POST['sname'];
$obpassword=$_POST['password'];
$sql = "INSERT INTO `officebearer`(`obname`,`obpassword`,`cid`,`sid`) VALUES ('$obname','$obpassword','$cid','$sid')";

$result= mysqli_query($con,$sql);

      echo "
      <script>
      alert('Selected');	
      window.location='mentordash.php';
      </script>
      ";
       
}
 ?>