<?php session_start();
     unset($_SESSION['sid']);
     unset($_SESSION['obid']); 
     unset($_SESSION['mid']);
     unset($_SESSION['aid']);  
      session_destroy();  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logged out</title>
	
</head>
<body>
<div>
	
      echo "
      <script>
      alert('Logged out successfully');
      window.location='home.php';
      </script>
      ";
</div>
</body>
</html>