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
    $servername = 'localhost';
    $dbname='slamtp';
    $username = 'user2';
    $password = '1234';
    $red=$_SESSION["connect"] || 2;
 
?>

        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='sinscire'>       <div class="red"><?php
                if($red==1){
                    echo 'erreur de connection !';
                }
                // Code de vérification 
                ?></div>
            </form>
        </div>
    </body>
</html>
