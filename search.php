<?php 
session_start();
      if(!isset($_SESSION['sid'])){
      header("Location: student.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Events</title>
  <style>
    .title{
  position: absolute;
  top: 20%;
  left:50%;
  transform:translate(-50%,-50%);
  }
  .title h1{
    color: black;
    font-size: 40px;

  }
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
    width: 28%;
    height: auto;
    display: inline;
    text-align: center;
  }
  .container a{
    text-decoration-line: none;
    color: white;
    font-size: 20px;
  }
  .container a:hover{
    color: red;
  }
  </style>
</head>
<body style=" background-image:url('public/frontside/images/logbg.png'); background-repeat: no-repeat;background-size: cover;">
<div class="title">
  <h1>DEPARTMENT EVENTS</h1>
</div>
<div class="container">
	<form method="post">
		<label>Enter the department of event</label>
		<select name="department" required>
  <option value="CSE">CSE</option>
  <option value="ECE">ECE</option>
  <option value="ISE">ISE</option>
  <option value="CIV">CIV</option>
  <option value="MECH">MECH</option>
  <option value="OTHER">OTHER</option>
</select><br><br>
<input type="submit" value="Search" name="search">


	</form>

<?php 
include('db.php');

if(isset($_POST['search']))
	 {
	 	$check=$_POST['department'];
		if ($check == "CSE") {
			$_SESSION['dno'] = 1;
		}
		elseif ($check == "ISE") {
			$_SESSION['dno']  = 2;
		}
		elseif ($check == "ECE") {
			$_SESSION['dno']  = 3;
		}
		elseif ($check == "MECH") {
			$_SESSION['dno']  = 4;
		}
		elseif ($check == "CIV") {
			$_SESSION['dno']  = 5;
		}
		elseif ($check == "OTHER") {
			$_SESSION['dno']  = 6;
		}
		
	 }
 ?>
<form>

  <hr>
       <table border="1">
  <thead>
      <tr>
      <th>Event ID</th>
      <th>Event Name</th>
      <th>Event Description</th>
      <th>Organiser</th>
      <th>Register</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    
     
   
     $dno=$_SESSION['dno'] ;
    
    include('db.php');
    $one=1;
    
    $sql = mysqli_query($con,"SELECT * FROM `event` WHERE dno='$dno' AND approval='$one'");
    while ($res = mysqli_fetch_array($sql)) 
    {
      echo'
      <tr>
      <td>'.$res['eid'].'</td>
      
      <td>'.$res['ename'].'</td>

      <td>'.$res['edesp'].'</td>

      <td>'.$res['club'].'</td>
      
      

        <td><a href="reg.php?sid=' .$_SESSION['sid'].'&eid='.$res['eid'].'">Select</a></td>
        
      </tr>
      ';
      
     }

      ?>
  </tbody>
</table><br>
<a href="studentdash.php">Back to Dashboard</a>
	</form>
  </div>
</body>
</html>