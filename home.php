<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="frontside/css/bootstrap.css">

	<style>
	header{
		font-size: 20px;
		
		background-size:cover;
		background-position:center; 
	}
        
	
 ul{
	 	
	 	list-style-type: none;
	 	margin-top: 25px;
	 }
	 ul li{
	 	display:inline-block;
	 }
ul li a{
	text-decoration-line: none;
	color:white;
	padding: 5px 20px;
	border:1px solid white;
	transition:0.6s ease;
}
ul li a:hover{
	background-color: white;
	color:#000;
}
ul li.active a{
	background-color: white;
	color:#000;
}
.container{
	max-width: 1200px;
	margin:auto;
	text-align: center;
	padding-top: 8px;
	padding-bottom: 8px;
}
.title{
	position: absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	text-align: center;
}
.title h1{
	color: black;
	font-size:40px;
}
.title p{
	font-size: 20px;
	font-weight: bold;
}	
	</style>
</head>

<body style=" background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) , url('public/frontside/images/logbg.png'); background-repeat: no-repeat;background-size: cover;">
<header>
	<div class=container>

<form method="post">
<ul>
<li class="active"><a href="home.php ?>">Home</a></li>
	<li><a href="admin.php">Admin Login</a></li>
	<li><a href="mentor.php">Mentor Login</a></li>
	<li><a href="OB.php">Office bearer Login</a></li>
	<li><a href="student.php">Student Login</a></li>
	</ul>
</form>
</div>
<div class="title">
<h1>CLUB MANAGEMENT SYSTEM</h1>
<p>"Without data, you're just another person with an opinion."</p>
<p>~W. Edwards Deming</p>
</div>
</header>
</body>
</html>