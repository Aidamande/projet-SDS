<?php 
$bdd=new mysqli ('localhost','root', '', 'sds');
        if(isset($_POST['Enregistrer'])) {
           
                if( !empty($_POST['id_tuteur']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['date_de_naissance']) AND !empty($_POST['mail']) AND !empty($_POST['tel']) AND !empty($_POST['tuteur'])){
            
                $id_tuteur = stripslashes($_REQUEST['id_tuteur']);
                $nom = stripslashes($_REQUEST['nom']);
                $prenom = stripslashes($_REQUEST['prenom']);
                $date_de_naissance = stripslashes($_REQUEST['date_de_naissance']);
                $mail = stripslashes($_REQUEST['mail']);
                $tel = stripslashes($_REQUEST['tel']);
                $tuteur = stripslashes($_REQUEST['tuteur']);
                
                $query= "SELECT * FROM `etudiant` WHERE  id_tuteur='$id_tuteur', nom='$nom', prenom='$prenom', date_de_naissance='$date_de_naissance', email='$email', telephone='$telephone' AND tuteur='$tuteur';
               echo $query;
                $resultat = mysqli_query($bdd, $query) or die(mysql_error());
                $rows = mysqli_num_rows($resultat);
                if($rows >= 1){
                    echo "Reussir";
                    header ("location: tuteur.php");
                }
    
                else{
                    echo "Insertion réussie";
                }

             }
             else{
                echo "Veuillez remplir tous les champs";
            }
        }
        ?>