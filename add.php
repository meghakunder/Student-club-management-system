<!DOCTYPE html>
<html>
<head>
	<title>Confirm</title>
	<style>
	.container{
		border: 1px solid black;
		background: black;
		color: white;
		width: 23%;
		height: 55%;
		text-align: center;
		padding-bottom: 20px;
		padding-top: 20px;
		margin-left: 38%;
		margin-top: 15%;
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
	<h1>ADD STAFF FOR CLUB</h1>
</div>
	<?php 
	$sfid = $_GET['sfid'];
	include('db.php');
		session_start();
$result = mysqli_query($con,"SELECT cname from `club` where cid ='".$_SESSION['cid']."'");
$row = mysqli_fetch_array($result);
$cd = $row['cname'];
	$sql = mysqli_query($con,"SELECT * FROM `staff` WHERE sfid='$sfid'");
	$res = mysqli_fetch_array($sql);
	 ?>
	 <div class="container">
	 <form method="post">
		 <label>Staff ID</label>
		 <input type="number" name="sfid" readonly value="<?php echo $res['sfid'] ?>"><br><br>
   	     <label>Staff Name</label>  
   	     <input type="text" name="sfname" readonly value="<?php echo $res['sfname'] ?>"><br><br>
   	     <label>Password</label>  
   	     <input type="password" name="password" required><br><br>   	     
	     <label>Department ID</label>  
	     <input type="number" name="dno" readonly value="<?php echo $res['dno'] ?>"><br><br>
	     <label>Club name</label> 
	     <input type="text" name="cname" readonly value="<?php   echo "$cd" ?>"><br><br>
	      <label>Club ID</label> 
	     <input type="number" name="cid" readonly value="<?php echo $_SESSION['cid'] ?>"><br><br>
	     <input type="submit" name="add" value="Insert"><br>
	</div>
</body>
</html>
<?php 
include('db.php');
 if(isset($_POST['add']))
 {
 	
$sfid =$_POST['sfid'];
$cid = $_SESSION['cid'];
$mname =$_POST['sfname'];
$dno = $_POST['dno'];

$mpassword=$_POST['password'];
$sql = "INSERT INTO `mentor`(`mname`,`mpassword`,`dno`,`cid`,`sfid`) VALUES ('$mname','$mpassword','$dno','$cid','$sfid')";
$result= mysqli_query($con,$sql);


      echo "
      <script>
      alert('Selected');
      window.location='admindash.php';
      </script>
      ";
       
}
 ?>