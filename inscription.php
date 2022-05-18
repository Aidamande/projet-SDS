<?php 
        $bdd= new PDO ('mysql:host=localhost;dbname=sds;charset=utf8;', 'root', '');
        if(isset ($_POST['Inscription'])) {
            if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['cmdp'])){
            
                $nom = htmlspecialchars($_POST['nom']);
                $prenom = htmlspecialchars($_POST['prenom']);
                $mail= htmlspecialchars($_POST['mail']);
                $mdp = md5($_POST['mdp']);
                $cmdp = md5($_POST['cmdp']);
                $insertadministrateur= $bdd->prepare('INSERT INTO administrateur (nom, prenom, email, mot_de_passe)VALUES(?,?,?,?)');
                $insertadministrateur ->execute(array($nom, $prenom, $mail, $mdp));
            header("location: html/authentification.php");

             }
             else{
                echo "Veuillez remplir tous les champs";
            }
        }
        
?>

        
       