<?php 
session_start();
      if(!isset($_SESSION['aid'])){
      header("Location: admin.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Department</title>
	<style>
		.login-box{
        width: 30%;
        height: 45%;
        background:black;
        color:#fff;
        top:50%;
        left:50%;
        position:absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 70px 30px;
        text-align: center;
      }

    .login-box label{
      margin:0;
      padding:0;
      font-weight: bold;
      font-size: 20px;
    }
    .login-box input{
      width:100%;
      margin-bottom: 20px;

    }
    .login-box input[type="text"],input[type="dname"]
    {
      border:none;
      border-bottom: 1px solid #fff;
      background: transparent;
      outline: none;
      height:40px;
      color:#fff;
      font-size: 16px;
    }
    .login-box input[type="submit"]
    {
      border: none;
      outline:none;
      height: 40px;
      background:#1c8adb;
      font-size: 18px;
    }
    .login-box input[type="submit"]:hover{
      cursor:pointer;
      background:#39dc79;
      color:#000;
    }
    .login-box a{
      text-decoration: none;
      font-size: 18px;
      color:#fff;
    }
    .login-box a:hover{
      color:#39dc79;
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
<body style=" background-image: url('public/frontside/images/logbg.png'); background-repeat: no-repeat;background-size: cover;">
	<div class="title">
		<h1>ADD NEW DEPARTMENT</h1>
	</div>
	<div class="login-box">
		<form method="post">
			<label>Enter the Name of the New Department</label>
			<input type="text" name="dname" placeholder="Enter Department" required>
			<input type="submit" value="Create" name="create"><br>
			<a href="admindash.php">Go Back to Main Menu</a>
		</form>
	</div>
 <?php 
	 include('db.php');
	 if(isset($_POST['create']))
	 {
	    $dname=$_POST['dname'];

        $sql="INSERT INTO department(dname) VALUES ('$dname')";
        $result= mysqli_query($con,$sql);
          echo "
          <script>
          alert('Addition Successful');
          window.location='adddepartment.php';
          </script>
          ";
        
	
		
	 }
    ?>
</body>
</html>