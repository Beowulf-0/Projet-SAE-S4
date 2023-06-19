<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Résultats sondage</title>
    <link rel="icon" type="image/x-icon" href="../images/IUT.jpg">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/styleResultat.css">
</head>


<body>
    <?php include '../pages/header_global.php' ?>
    <?php include '../pages/header.php' ?>
    <div id="corps">
        <label for="titre"> <b> Résultats du sondage :</b> </label>
        <label for="titre"> <b> Par catégorie d'aliments </b> </label>
        <canvas class="graphique">
            
        </canvas>

        <label for="titre"> <b> Bio / Non Bio </b> </label>
        <canvas class="graphique">

        </canvas>

        <label for="titre"> <b> Végan / Non végan </b> </label>
        <canvas class="graphique">

        </canvas>
        <div id="bouton">
            <a id="button" href="../pages/sondage.php"> Retour </a>
        </div>
    </div>
</body>
<script src="../js/graphique.js" type="text/javascript"> </script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</html>