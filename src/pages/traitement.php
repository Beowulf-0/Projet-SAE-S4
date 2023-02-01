<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Traitement</title>
</head>

<body>
    <?php
        include("config.php");
        $Nom = $_POST["nom"];
        $Prenom = $_POST["prenom"];
        $Date = $_POST["date"];  
        $Tel = $_POST["tel"]; 
        $Adresse = $_POST["adresse-postale"]; 
        $Postal = $_POST["code-postal"]; 
        $Ville = $_POST["ville"]; 

        echo "$Nom $Prenom $Date $Tel $Adresse $Postal $Ville";

        // Verifie si les données ne sont pas NULL
        if(isset($Nom,$Prenom,$Date,$Tel,$Adresse,$Postals,$Ville)){

        }

        $sql="INSERT INTO sondestest (NomSonde,PrenomSonde,DateNaissance,Adresse,CodePostal,Ville,Tel) VALUES ('$Nom','$Prenom','$Date','$Adresse','$Postal','$Ville','$Tel')";
        $result = mysqli_query($mysqli,$sql);
        $prod=rand(1,300);
        if (!$result) {
         die('Invalid query: ' . mysqli_error());
            }
    ?>
</body>

</html>

