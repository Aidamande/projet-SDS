<?php 
require('database.php');
$host = 'localhost';
$dbname = 'sds';
$username = 'root';
$password = '';

                // $id_tuteur =$_POST['id_tuteur'];
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $date_de_naissance= $_POST['date_de_naissance'];
                $mail = $_POST['mail'];
                $tel= $_POST['tel'];
                $tuteur =$_POST['id_tuteur'];
                
    
              
                $sql = "INSERT INTO etudiant (nom, prenom, date_de_naissance, email, telephone, id_tuteur) VALUES (?,?,?,?,?,?)";
              echo $tuteur;
              echo $tel;
                $res =$bdd->prepare($sql);
                $rec = $res->execute(array( $nom, $prenom, $date_de_naissance, $mail, $tel, $tuteur));
                
                
                if($rec){
                    header("location: liste.php");
                    echo 'réussi';
                }else{
                    echo "echec de l'insertion";
                }
                
?> 