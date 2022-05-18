<?php 
$bdd=new mysqli ('localhost','root', '', 'sds');
        if(isset($_POST['Enregistrer'])) {
           
                if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['telephone'])){
            
                
                $nom = stripslashes($_REQUEST['nom']);
                $prenom = stripslashes($_REQUEST['prenom']);
                $tel = stripslashes($_REQUEST['telephone']);
               
                
                $query= "SELECT * FROM `tuteur` WHERE nom='$nom', prenom='$prenom', telephone='$telephone';
               echo $query;
                $resultat = mysqli_query($bdd, $query) or die(mysql_error());
                $rows = mysqli_num_rows($resultat);
                if($rows >= 1){
                    echo "Reussir";
                    header ("location: liste.php");
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