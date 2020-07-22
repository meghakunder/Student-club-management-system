<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
  <style>
  .login-box{
        width: 320px;
        height:420px;
        background:black;
        color:#fff;
        top:58%;
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
    .login-box input[type="password"],input[type="password"],input[type="name"],input[type="username"]
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
<body style=" background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) , url('public/frontside/images/logbg.png'); background-repeat: no-repeat;background-size: cover;">
<div class="title">
    <h1>STUDENT LOGIN</h1>
  </div>
  <div class="login-box">
  <img src="public/frontside/images/student.png" class="avatar" >
  
	
<form method="post">
<label>Username</label>
<input type="name" name="Username" placeholder="Enter username"required><br>
<label>Password</label>
<input type="password" name="Password" placeholder="Enter password"required><br>
<input type="submit" value="Login" name="login"><br><br>
<a href="home.php">Back to Select Login Page</a>
</form>
</div>

<?php 
	 include('db.php');
   session_start();
	 if(isset($_POST['login']))
	 {
		$username=$_POST['Username'];
		$password=$_POST['Password'];
        $sql="SELECT * FROM `student` WHERE sid='$username' AND spassword='$password'";
        $result= mysqli_query($con,$sql);
        $check= mysqli_fetch_array($result);
        if (isset($check)) 
        {
           $_SESSION['sid']= $username;
          echo "
          <script>
          alert('Login Successful');
          window.location='studentdash.php';
          </script>
          ";
        }
        else
        {
           echo "
          <script>
          alert('Login Unsuccessful');
          window.location='student.php';
          </script>
          ";
        }
	
		
	 }
    ?>
</body>
</html>