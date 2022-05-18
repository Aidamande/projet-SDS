<?php
try {
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=sds', 'root', '');
    // echo'done';

} catch (Exception $e){
    die('Erreur : ' . $e->getMessage);
}
  
?>