<?php 
    session_start();
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
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
        die;
        }


?>