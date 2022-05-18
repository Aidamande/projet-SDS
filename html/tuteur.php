<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>tuteur</title>
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
                <h1 style="background-color:#2ca332; width: 320px;color:white ;">Enregistrement tuteur</h1>
               
            </center>
            
            <form action="traitementtuteur.php" method="post">
                
                <input class="form-control" type="text" placeholder="Nom" name="nom"> <br>
                <input class="form-control" type="text" placeholder="Prenom" name="prenom"> <br>
                <input class="form-control" type="text" placeholder="Téléphone" name="tel"> <br>
                <center>
                    <h1>
                        <input type="submit" name="Enregistrer" value="Enregistrer">
                        
                    </h1>  
                         
                </center>
            </form>

            

                <Footer class="pieds">
                    <img src="../images/universite-joseph-ki-zerbo.jpg" style="width: 150px; height: 150px;">
                    <p class="UFR">© UFR/SDS 2022 </p>
                    <img src="..//images/logoSante1.png" style="width: 150px; height: 150px; margin-left: 34%;" >
                </Footer>
        </div>
     </body>  
</html> 