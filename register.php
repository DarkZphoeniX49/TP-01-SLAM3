<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="enregistrement.php" method="post">
        <input type='text' placeholder="pseudo" name='pseudo'/>
        <br>
        <input type='text' placeholder="mail" name='mail'/>
        <br>
        <input type="password" placeholder="mot de passe" name='mdp'/>
        <br>
        <input type='password' placeholder='verif mot de passe' name='pwd'/>
        <br>
        <input type='submit'/>
    </form>
    <form action='index.php' method='POST'>
    <input type='submit' placeholder="deconexion" value='retour' name='deconexion'/>
</form>
</body>
</html>