<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 

    session_start();

    try{
            $servername = 'localhost';
        $dbname='slamtp';
        $username = 'user2';
        $password = '1234';
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $_SESSION['connect']=0;
        $_POST["username"]=$username;
        $_POST["password"]=$password;

        $_SESSION["nom"]=$username;
        $_SESSION["mdp"]=$password;
    
        $req=$conn->prepare("SELECT count(*) FROM connexion where 
        nom = '.$username.' AND  mdp='.$password.'; ");
        $req->execute();
        $result=$req->fetch();

        

        if($result !==0)
        {
            echo "connection réussi ! ";
            Header("Location: menu.php");
        }
        else{
            $_SESSION['connect']++;
            Header('Location: index.php');
        }

        $conn=null;
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
        die;
        }

?>
    <p>vous êtes inscrit !</p>
</body>

</html>