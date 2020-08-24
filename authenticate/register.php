<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration !</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class = "yo">
	<div class = "main">
		<div  id="container">
			<form  action="insert.php" method="POST" >
			 <h3 style="color:#FF0000";> REGISTRATION </h3>
				<p>
					Name <br>
					<input autocomplete="off" type="text" name="name" class="login" required>
				</p>
				<p>
					Date of Birth <br>
					<input type="date" name="date" class="login" required>
				</p>
				<p>
					Sex 
					<input type="radio" name="sex" value="male"  checked="checked" /> <label for="male">Male</label>
					<input type="radio" name="sex" value="female"  /> <label for="female">Female</label>
				</p>
				<p>
					Phone <br>
					<input type="number" name="number" class="login" required>
				</p>
				<p>
					Email <br>
					<input autocomplete="off" type="email" name="email" class="login" required>
				</p>
				<p>
					Password <br>
					<input type="password" name="password" class="login" required>
				</p>
				
				<p>
					<input type="submit" name="submition" value="SIGN UP" class="button">
					
				</p>
				
				<a href="login.php">Have an account?</a>
			</form>
		</div>
	</div>
	</div>
</body>
</html>