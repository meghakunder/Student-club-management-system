<!DOCTYPE html>
<html>
<head>
	<title>Office Bearer Login</title>
  <style>
  .login-box{
        width: 320px;
        height:360px;
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

      .avatar{
        width:100px;
        height:100px;
        border-radius: 50%;
        position: absolute;
        top:-50px;
        left:calc(50% - 50px);

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
    .login-box input[type="password"],input[type="password"],input[type="obid"],input[type="name"]
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
    </style>
</head>
<body style=" background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) , url('public/frontside/images/logbg.png'); background-repeat: no-repeat;background-size: cover;">
  <div class="login-box">
  <img src="public/frontside/images/user.png" class="avatar" >
	<div>
<form method="post">
<label>Username</label>
<input type="name" name="obid" placeholder="Enter username" required><br>
<label>Password</label>
<input type="password" name="Password" placeholder="Enter password"required><br>
<input type="submit" value="Login" name="login">
<a href="home.php">Back to Login Page</a>
</form></div>

<?php 
	 include('db.php');

   session_start();
	 if(isset($_POST['login']))
	 {
		$username=$_POST['obid'];
		$password=$_POST['Password'];

        $sql="SELECT * FROM `officebearer` WHERE obid='$username' AND obpassword='$password'";
        $result= mysqli_query($con,$sql);
        $check= mysqli_fetch_array($result);
        if (isset($check)) 
        {
           $_SESSION['obid']= $username;
           
          echo "
          <script>
          alert('Login Successful');
          window.location='secdash.php';
          </script>
          ";
        }
        else
        {
           echo "
          <script>
          alert('Login Unsuccessful');
          window.location='OB.php';
          </script>
          ";
        }
	
		
	 }
    ?>
</body>
</html>