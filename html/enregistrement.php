
<!DOCTYPE html>
<html lang="en">
<?php 
$bdd = new mysqli("localhost", "root", "", "sds");

            $query = "SELECT * FROM tuteur ORDER BY id_tuteur DESC";
            $solution = mysqli_query($bdd, $query); 
                           
 ?>
<head>
    <meta charset="UTF-8">
    <title>enregistrement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="./css/bootstrap-5.1.3-dist/css/bootstrap.min.css"/> -->
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
        <div class="contain">
            <center>
                <h1 class="ergtmt">Enregistrement étudiants (es)</h1>
               
            </center>
            
            <form action="traitementetudiant.php" method="post">
                
                <input class="form-control" type="text" placeholder="Nom" name="nom"> <br>
                <input class="form-control" type="text" placeholder="Prenom" name="prenom"> <br>
                <input class="form-control" type="date" placeholder="Date de naissance" name="date_de_naissance" > <br>
                <input class="form-control" type="text" placeholder="Email" name="mail"> <br>
                <input class="form-control" type="text" placeholder="Téléphone" name="tel"> <br>
            

                <center>
                    <h1 class="">
                        <input type="submit" placeholder="Enregistrer" name="Enregistrer" value="Enregister">
                        <select name="id_tuteur" id="id_tuteur">
                            <?php 
                            while($lign=mysqli_fetch_assoc($solution)){
                              echo "<option value='$lign[id_tuteur]'> $lign[prenom] $lign[telephone]</option>";
                            }
                            ?>
                             
                        </select>
                    </h1>
                </center>
            </form>

            <center>  <h3 style="color:#2ca332 ;">Voir la liste</h3> </center>

                <Footer class="pieds">
                    <img src="../images/universite-joseph-ki-zerbo.jpg" style="width: 150px; height: 150px;">
                    <p class="UFR">© UFR/SDS 2022 </p>
                    <img src="..//images/logoSante1.png" style="width: 150px; height: 150px; margin-left: 34%;" >
                </Footer>
        </div>
     </body>  
</html> 