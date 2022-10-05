<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css" />
    </head>
    <body>
<?php
	//Exemple de syntaxe de connexion à la base de données pour PHP et MySQL.
	
	//Se connecter à la base de données
	
	session_start();
    $red=$_SESSION["connect"];
 
?>

        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='se connecter'>       <div class="red"><?php
                if($red){
                    echo 'erreur de connection !';
                }
                // Code de vérification 
                ?></div>
            </form>
            <form action='register.php' method='POST'>
    <input type='submit' placeholder="deconexion" value='sinscrire' name='deconexion'/>
</form>
            
        </div>
    </body>
</html>
