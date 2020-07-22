<?php 
session_start();
      if(!isset($_SESSION['aid'])){
      header("Location: admin.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Club</title>
	<style>
		.login-box{
        width: 30%;
        height: 55%;
        background: black;
        color:#fff;
        top:52%;
        left:50%;
        position:absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 40px 30px;
        text-align: center;

      }

    .login-box label{
      margin:0;
      padding:0;
      font-weight: bold;
      font-size: 23px;
    }
    .login-box input{
      width:100%;
      margin-bottom: 20px;

    }
    .login-box input[type="text"],input[type="cname"]
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
		<h1>ADD NEW CLUB</h1>
	</div>
<div class="login-box">
	<form method="post">
		<label>Enter the Club name</label>
		<input type="text" name="cname"><br>
		<label>Enter the department name the club belongs to :</label><br><br>
		<select name="department" required><br>
  <option value="CSE">CSE</option>
  <option value="ECE">ECE</option>
  <option value="CIV">CIV</option>
  <option value="ISE">ISE</option>
  <option value="MECH">MECH</option>
  <option value="OTHER">OTHER</option>
</select><br><br>
<input type="submit" value="Create" name="create"><br>
<a href="admindash.php">Go Back to Main Menu</a>
	</form>
</div>
<?php 
	 include('db.php');
	 if(isset($_POST['create']))
	 {
	    $cname=$_POST['cname'];
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
		
        $sql="INSERT INTO club(cname,dno) VALUES ('$cname','$dno')";
        $result= mysqli_query($con,$sql);
          echo "
          <script>
          alert('Addition Successful');
          window.location='addclub.php';
          </script>
          ";
        
	
		
	 }
    ?>

</body>
</html>