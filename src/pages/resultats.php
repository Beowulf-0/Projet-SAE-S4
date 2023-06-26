<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Résultats sondage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/IUT.jpg">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/styleResultat.css">
</head>


<body>
    <?php include '../pages/header_global.php' ?>
    <?php include '../pages/header.php' ?>
    <?php
    $f = new Factory();
    $f->getAffichageFormulaire()->getPresentationResultats();
    ?>
</body>

<script src="../js/classes/Factory.js" type="module/javascript"></script>
<script type="module">
    import { Factory } from '../js/classes/Factory.js';
    const f = new Factory();
    const g = f.getGraphique();
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</html>