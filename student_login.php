<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" type="text/css" href="head.css">
  	<img src="logo.jpg" height="100px;">
  	<div class="a"></div>
</head>
<body>

	<div class="main_box">
		<div class="box">
			<h1>Login Form</h1>
			<form method="POST" action="">
				<div class="inputbox">
					<input type="text" name="email" autocomplete="off" required>
					<label>User ID</label>
				</div>
				<div class="inputbox">
					<input type="password" name="password" autocomplete="off" required>
					<label>Password</label>
				
				<input type="submit" name="submit" value="LogIn">
				
			</form>
		</div>
	</div>
		<?php
			session_start();
			if(isset($_POST['submit']))
			{
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"sms");
				$query = "select * from students where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					if($row['email'] == $_POST['email'])
					{
						if($row['password'] == $_POST['password'])
						{
							$_SESSION['name'] =  $row['name'];
							$_SESSION['email'] =  $row['email'];
							header("Location: student_dashboard.php");
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
						}
					}
					else
					{
						?>
						<span>Wrong UserName !!</span>
						<?php
					}
				}
			}
		?>
	</center>
</body>
</html>