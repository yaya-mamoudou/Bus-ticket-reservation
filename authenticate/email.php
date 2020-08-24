
<link rel="stylesheet" type="text/css" href="style.css">
<div id="container">
<a href="login.php">Home</a>
<form method="post">
	<p>
		<label for="ma">entrer votre adresse  e-mail ?</label>
		<input  name="mail"   placeholder="Entrer email"/><br/>
		<input type="submit" value="envoyé" / >
		<p>
<?php
if(isset($_POST['mail']))
{
$_POST['mail']=htmlspecialchars($_POST['mail']);
if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['mail']))

{
	echo 'un message a été envoyé à ' .$_POST['mail'].' <strong> ouvrez le</strong>!';
}
else
{
 echo '' .$_POST['mail'].'n\'est pas une adresse valide <strong> recommencer </strong>!'; 
}

}
?>
</p>
	</p>
</form>

</div>