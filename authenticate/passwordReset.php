<!DOCTYPE html>
<p>
<?php
if(isset($_POST['mail']))
{
$_POST['mail']=htmlspecialchars($_POST['mail']);
if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['mail']))

{
	echo 'le mail' .$_POST['mail'].'est un mail <strong>valide</strong>!';
}
else
{
 echo 'le mail' .$_POST['mail'].'n\'est pas valide recommencer!'; 
}

}
?>
</p>
<html>
<head>
	<title>Change password</title>
	
</head>
<body>
	<div id="navigation">
		<a href="login.php">Home</a>
	</div>
	<div id="passwordReset">
		<form method="post" action="">
			<p>
				Email address <br>
				<input type="text" name="mail" class="login">
			</p>
			<p>
				<input type="Submit" name="mail" value="Submit" class="button">
				
			</p>
		</form>
	</div>
	<div id="message">
		<p>
			Oops, password forgotten !? <br>
			Check your Email to have your new password after validation
		</p>
	</div>
</body>
</html>