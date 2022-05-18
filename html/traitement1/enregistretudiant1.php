<?php 
        $bdd= new PDO ('mysql:host=localhost;dbname=sds;charset=utf8;', 'root', '');
        if(isset ($_POST['Enregistrer'])) {
            if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['date_de_naissance']) AND !empty($_POST['mail']) AND !empty($_POST['tel']) AND !empty($_POST['tuteur'])){
            
                $id_tuteur= $_POST['id_tuteur'];
                $nom = ($_POST['nom']);
                $prenom = ($_POST['prenom']);
                $date_de_naissance= ($_POST['date_de_naissance']);
                $mail = ($_POST['mail']);
                $tel= ($_POST['tel']);
                $tuteur = ($_POST['tuteur']);
    
                $insertetudiant=$bdd->prepare('INSERT INTO etudiant (id_tuteur, nom, prenom, date_de_naissance, email, telephone, tuteur)VALUES(?,?,?,?,?,?)');
                $insertetudiant->execute(array($id_tuteur, $nom, $prenom, $date_de_naissance, $email, $telephone, $tuteur));
                header("location: tuteur.php"); 
                } else{ echo "Veuillez remplir tous les champs"; 
                } 
            } 
?> 