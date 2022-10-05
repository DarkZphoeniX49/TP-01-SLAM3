<?php 
    session_start();
    ini_set('display_errors', 'off');
    $servername = 'localhost';
    $dbname='slamtp';
    $username = 'user2';
    $password = '1234';


    $pseudo=$_POST['pseudo'];
    $mail=$_POST['mail'];
    $mdp=$_POST['mdp'];
    $pwd=$_POST['pwd'];

    try{            
        if(!$mdp || !$pwd || !$mail || !$pseudo){
            Header('Location: enregistrement.php');
        }
        else{
            if($mdp==$pwd){
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $mdp=password_hash($mdp,PASSWORD_DEFAULT );
                $req=$conn->prepare("INSERT INTO connexion (`nom`, `mdp`, `date_crea`, `date_activ`, `id`, `Mail`) VALUES (:pseudo, :mdp, CURRENT_DATE(), NULL, NULL, :mail);");
                $req->bindValue(':pseudo',$pseudo,PDO::PARAM_STR);
                $req->bindValue(':mdp',$mdp,PDO::PARAM_STR);
                $req->bindValue(':mail',$pseudo,PDO::PARAM_STR);
                $req->execute();
                $_SESSION["connect"]=0;
                Header("Location: index.php");
            }
            else Header('Location:register.php');
                    
        }
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
        die;
        }


?>