<?php 
$bdd=new mysqli ('localhost','root', '', 'sds');
        if(isset($_POST['seconnecter'])) {
            if(!empty($_POST['mail']) AND !empty($_POST['mdp'])){
            
                $mail = stripslashes($_REQUEST['mail']);
                // $mail = mysqli_real_escape_string($bdd, $mail);
                $mdp = stripslashes($_REQUEST['mdp']);
                // $mdp = mysql_real_escape_string($bdd, $mdp);
                $query= "SELECT * FROM `administrateur` WHERE email='$mail' AND mot_de_passe='".hash('md5', $mdp)."'";
               echo $query;
                $resultat = mysqli_query($bdd, $query) or die(mysql_error());
                $rows = mysqli_num_rows($resultat);
                if($rows >= 1){
                    echo "Reuissir";
                    header ("location: enregistrement.php");
                }
    
                else{
                    echo "Votre mot de passe ou email est incorrect";
                }

             }
             else{
                echo "Veuillez remplir tous les champs";
            }
        }
?>