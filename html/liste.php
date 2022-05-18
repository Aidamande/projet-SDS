<!DOCTYPE html>
<html lang="en">
<?php 
$bdd = new mysqli("localhost", "root", "", "sds");

            $query = "SELECT * FROM etudiant";
            $solution = mysqli_query($bdd, $query); 
                           
 ?>
<head>
    <meta charset="UTF-8">
    <title>liste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap-5.1.3-dist/css/bootstrap.min.css"/>
   <link rel="stylesheet" href="../css/sds.css">
   </head>
     <body>
        <div class="entete">
            <img src="../images/universite-joseph-ki-zerbo.jpg" style ="width: 150px; height: 150px;">
            <div class="tete">
                <h1 class="unite">Unité de Formation et de Recherche en Sciences de la Santé</h1> 
                <!-- <img src="./images/séringue.PNG" style="width: 100px; height: 100px; margin-top: 70px; margin-right: 80px;"> -->
            </div>
            <img src="../images/logoSante1.png" style="width: 150px; height: 150px; margin-left: 15%;">
        </div>
        <div class="contai">
           
        <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom (s)</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Email</th>
      <th scope="col">Téléphone</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $id=1;
                            while($lign=mysqli_fetch_assoc($solution)){
                              echo "
                              
                              <tr>
                              <th scope='row'>$id</th>
                              <td>$lign[nom]</td>
                              <td>$lign[prenom]</td>
                              <td>$lign[date_de_naissance]</td>
                              <td>$lign[email]</td>
                              <td>$lign[telephone]</td>
                              </tr>
                              ";
                              $id +=1;
                            }
      ?>
      </tbody>
</table>
        </div>
        <Footer class="pieds">
            <img src="../images/universite-joseph-ki-zerbo.jpg" style="width: 150px; height: 150px;">
            <p class="UFR">© UFR/SJP 2022 </p>
            <img src="..//images/logoSante1.png" style="width: 150px; height: 150px; margin-left: 34%;" >
        </Footer>
     </body>  
</html> 