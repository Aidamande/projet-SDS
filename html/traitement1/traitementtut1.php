<?php 
        $bdd= new PDO ('mysql:host=localhost;dbname=sds;charset=utf8;', 'root', '');
        if(isset ($_POST['Enregistrer'])) {
            if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['tel'])){
            
                
                $nom = ($_POST['nom']);
                $prenom = ($_POST['prenom']);
                $tel= ($_POST['tel']);
                $insertetudiant=$bdd->prepare('INSERT INTO tuteur (nom, prenom,telephone)VALUES(?,?,?)');
                $insertetudiant->execute(array($nom, $prenom, $tel));
                if($insertetudiant){
                    print_r($insertetudiant);
                }else{
                    echo "erreur insertion";
                }
                
                } else{ echo "Veuillez remplir tous les champs"; 
                } 
            } 
            else{
                echo "gghg";
            }
?> 