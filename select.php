<!DOCTYPE html>
<html>
<head>
	<title>Select</title>
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
    .container{
  position: absolute;
  top:20%;
  left:50%;
  transform:translate(-50%,-50%);
  }
  .container h1{
    color: black;
    font-size: 40px;

  }
  .container-fluid{
    border: 1px solid black;
    width: 25%;
    height: auto;
    background: black;
    color: white;
    left: 50%;
    text-align: center;
    font-size: 20px;
    padding: 20px 10px;
    margin-top: 15%;
    margin-left: 37%;
  }
  .container-fluid table{
    margin-left: 38px;
  }
  .container-fluid table tr{
    width: 20%;
    text-align: center;
    padding-left: 20px;
  }
  </style>
</head>
<body style=" background-image:url('public/frontside/images/logbg.png'); background-repeat: no-repeat;background-size: cover;">
  <div class="container">
    <h1>SELECT STAFF FOR CLUB</h1>
  </div>
 <div class="container-fluid">
	<?php 
	$cid = $_GET['cid'];
	include('db.php');
	$sql = mysqli_query($con,"SELECT * FROM `club` WHERE cid='$cid'");

	$res = mysqli_fetch_array($sql);
	 ?>
    
	 <form method="post">
		 <label>Club Name</label> 
		 <input type="text" name="name" readonly value="<?php echo $res['cname'] ?>" ><br><br>
   	     
	     <input type="submit" name="back" value="Change Club" >

       <hr>
       <table border="1">
  <thead>
      <tr>
      <th>Staff ID</th>
      <th>Staff Name</th>
      <th>Select</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    
     $cid = $_GET['cid'];
   
     $dno=$res['dno'];
    
    include('db.php');
    session_start();
      $_SESSION['cid']=$cid;
    $sql = mysqli_query($con,"SELECT * FROM `staff` WHERE dno='$dno'");
    while ($res = mysqli_fetch_array($sql)) 
    {
      echo'
      <tr>
      <td>'.$res['sfid'].'</td>
      
      <td>'.$res['sfname'].'</td>
      
      

        <td><a href="add.php?sfid=' .$res['sfid'].'">Select</a></td>
        
      </tr>
      ';
      
     }

      ?>
  </tbody>
</table>

	</form>
  </div>
<?php 
include('db.php');
if(isset($_POST['back']))
{
  echo "
       <script>
      alert('Directing to the Club list');
      window.location='addmentor.php';
      </script>
      ";
}
?>

</body>
</html>