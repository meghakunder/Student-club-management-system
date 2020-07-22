   <?php 
session_start();
      if(!isset($_SESSION['obid'])){
      header("Location: sec.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create event</title>
   <style>
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
  .container a:hover{
   color: green;
  }
    .title{
  
  position: absolute;
  top:15%;
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
    <h1>ADD NEW EVENT</h1>
  </div>
<div class="container">
	<form method="post">
		<label>Event Name</label> 
		 <input type="text" name="ename" required><br><br>
   	     <label>Event Descprition</label>  
   	     <input type="text" name="edesp" required ><br><br>
	    <label>Event Date</label>  
   	     <input type="Date" name="date" required ><br><br>
	     <input type="submit" name="add" value="Create"><br><br>
	     <a href="secdash.php">Go Back To Dash Board</a><br>
	</form>

</div>
<?php
include('db.php');

 if(isset($_POST['add']))
 {
$obid=$_SESSION['obid'];
$sql1 = mysqli_query($con,"SELECT * FROM `officebearer` WHERE obid='$obid'");
$res1 = mysqli_fetch_array($sql1); 
$cid=$res1['cid'];
$sql2 = mysqli_query($con,"SELECT * FROM `club` WHERE cid='$cid'");
$res2 = mysqli_fetch_array($sql2);
$cname=$res2['cname'];
$dno=$res2['dno'];
$ename=$_POST['ename'];
$edesp=$_POST['edesp'];
$date=$_POST['date'];
$zero=0;
$sql = "INSERT INTO `event`(`ename`,`edesp`,`date`,`club`,`dno`,`cid`,`approval`) VALUES ('$ename','$edesp','$date','$cname','$dno','$cid','$zero')";
$result= mysqli_query($con,$sql);
echo "
      <script>
      alert('Event Created');
      window.location='secdash.php';
      </script>
      ";
}
  ?>
</body>
</html>