<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=100, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     session_start();
        $_SESSION["connect"]=0;
        echo "bienvenu".$_SESSION["nom"];
    
    
    ?>
   <form action='endSession.php' method='POST'>
    <input type='submit' placeholder="deconexion" value='deconnexion' name='deconexion'/>
</form>
</body>
</html>