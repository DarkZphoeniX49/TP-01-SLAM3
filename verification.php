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
$servername = 'localhost';
        $dbname='slamtp';
        $username = 'user2';
        $password = '1234';
        try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $nom=$_POST["username"];
            $pwd=$_POST["password"];
            $_SESSION["nom"]=$nom;

            $stmt=$conn->prepare("SELECT COUNT(id) as nb FROM connexion WHERE nom=:nomc AND mdp=:motdp");
            $stmt->bindValue(':motdp',$pwd,PDO::PARAM_STR);
            $stmt->bindValue('nomc',$nom,PDO::PARAM_STR);
            $stmt->execute();
            $estconnecté=$stmt->fetch();
            
           
            if($estconnecté['nb'])Header('Location: menu.php');
            else {
                $_SESSION["connect"]=1;
               Header('Location: index.php');
                }
        }
            catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
            die;
            }
?>
    <p>vous êtes inscrit !</p>
</body>

</html>