<!doctype>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body >
        <div class="yo">
            <div class="main">
            <div id="container">
            <form action="verification.php" method="POST">
                <h1>login</h1>
                
                <label><b>username</b></label>
                <input autocomplete="off" type="text" placeholder="Enter the username" name="username" required>

                <label><b>password</b></label>
                <input type="password" placeholder="Enter the password" name="password" required>

                <input type="submit" id='submit' value='SIGN IN' >
				<p>
			    <span>Don't have an account ?</span>	
				<a href="register.php"> SIGN UP </a>
			</p>
				
                <!-- <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?> -->
            </form>
        </div>
            </div>
        </div>
    </body>
</html>
