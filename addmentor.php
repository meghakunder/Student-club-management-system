<?php 
session_start();
      if(!isset($_SESSION['aid'])){
      header("Location: admin.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Mentor</title>
	<style>
		.login-box{
        width: 20%;
        height: 43%;
        background: black;
        color:#fff;
        top:50%;
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
  .login-box table tr{
    width: 50%;
  }
  .login-box table tr th{
    width: 40%;
  }
	</style>
</head>
<body style=" background-image:url('public/frontside/images/logbg.png'); background-repeat: no-repeat;background-size: cover;">
  <div class="title">
    <h1>SELECT MENTORS</h1>
  </div>
<div class="login-box">
	<form method="post">
		<table border="1">
	<thead>
	    <tr>
		  <th>Club ID</th>
		  <th>Club Name</th>
		 
		  <th>Select</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		include('db.php');
		
		$sql = mysqli_query($con,"SELECT * FROM `club`");

		while ($res = mysqli_fetch_array($sql)) 
		{
			echo'
			<tr>
			<td>'.$res['cid'].'</td>
			
			<td>'.$res['cname'].'</td>

			
			

		    <td><a href="select.php?cid=' .$res['cid'].'">Select</a></td>
		    
			</tr>
			';
		 	
		 }

		  ?>
	</tbody>
</table><br>
<a href="admindash.php">Go Back to Main Menu</a>
	</form>
</div>
</body>
</html>