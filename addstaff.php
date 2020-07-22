<?php 
session_start();
      if(!isset($_SESSION['aid'])){
      header("Location: admin.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Staff</title>
	<style>
		.login-box{
        width: 30%;
        height: 50%;
        background: black;
        color:#fff;
        top:50%;
        left:50%;
        position:absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 30px 30px;
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
    .login-box input[type="text"],input[type="name"]
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
<body style=" background-image:url('public/frontside/images/logbg.png'); background-repeat: no-repeat;background-size: cover;">
	<div class="title">
		<h1>ADD NEW STAFF</h1>
	</div>
	<div class="login-box">
		<form method="post">
			<label>Enter the name of Staff</label>
			<input type="text" name="name"><br>
			<label>Enter the department name</label><br><br>
			<select name="department" required><br>
  <option value="CSE">CSE</option>
  <option value="ISE">ISE</option>
  <option value="ECE">ECE</option>
  <option value="MECH">MECH</option>
  <option value="CIV">CIV</option>
  <option value="OTHER">OTHER</option>
</select><br><br>
<input type="submit" value="Add" name="add"><br>
<a href="admindash.php">Go Back to Main Menu</a>
		</form>
	</div>
<?php 
	 include('db.php');
	 if(isset($_POST['add']))
	 {
		$sfname=$_POST['name'];
		$sfpassword = 's1s1s1';
		$club = 0;
		$check=$_POST['department'];
		if ($check == "CSE") {
			$dno = 1;
		}
		elseif ($check == "ISE") {
			$dno = 2;
		}
		elseif ($check == "ECE") {
			$dno = 3;
		}
		elseif ($check == "MECH") {
			$dno = 4;
		}
		elseif ($check == "CIV") {
			$dno = 5;
		}
		elseif ($check == "OTHER") {
			$dno = 6;
		}
		
       $sql="INSERT INTO staff(sfname,sfpassword,dno) VALUES ('$sfname','$sfpassword','$dno')";
        $result= mysqli_query($con,$sql);
       
          echo "
          <script>
          alert('Addition Successful');
          window.location='addstaff.php';
          </script>
          ";
       
	
		
	 }
    ?>
</body>
</html>