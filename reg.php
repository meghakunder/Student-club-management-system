<?php 
$eid=$_GET['eid'];
$sid=$_GET['sid'];
include('db.php');

$sql2 = mysqli_query($con,"SELECT * FROM register WHERE sid='$sid' AND eid='$eid' ");
$res2 = mysqli_fetch_array($sql2);
if(count($res2)>0){
 echo "
          <script>
          alert('You are already registered');
          window.location='studentdash.php';
          </script>
          ";
}
else{
	$sql="INSERT INTO register(`sid`,`eid`) VALUES ('$sid','$eid')";
        $result= mysqli_query($con,$sql);
          echo "
          <script>
          alert('Registration Successful');
          window.location='studentdash.php';
          </script>
          ";
}
 
 ?>