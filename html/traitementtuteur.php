<?php 
$bdd=new mysqli ('localhost','root', '', 'sds');
require('database.php');
$host = 'localhost';
$dbname = 'sds';
$username = 'root';
$password = '';

if(isset($_POST['Enregistrer'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel= $_POST['tel'];

}
    
                $sql = "INSERT INTO tuteur (nom, prenom, telephone) VALUES (?,?,?)";
                $res =$bdd->prepare($sql);
                $recup = $res->execute(array($nom, $prenom, $tel));
                
                
                if($recup){
                    header("location: enregistrement.php"); 
                   
                }else{
                    echo "echec de l'insertion";
                }
            
                
?> 