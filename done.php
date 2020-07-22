<?php 
$eid=$_GET['eid'];

include('db.php');
 $sql="UPDATE event SET approval=0 WHERE eid =$eid";
        $result= mysqli_query($con,$sql);
          echo "
          <script>
          alert('EVENT REGISTERATIONS CLOSED');
          window.location='secdash.php';
          </script>
          ";
 ?>