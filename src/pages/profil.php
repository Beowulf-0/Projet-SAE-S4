<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulaire</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>


<body>
    <?php include '../pages/header.php' ?>
    
    <!--A déplacer dans src/classes/Formulaire.php-->
    <form action="../php_bdd/modification_profil.php" method="post" id="form_ident">
        
        
    
        

        <div id="boutons">
            <input type="submit" value="Envoyer" id="bouton-validation">

            <!--Bouton annulation-->
            <input type="reset" value="Effacer" id="bouton-annulation">
        </div>

    </form>
</body>

</html>