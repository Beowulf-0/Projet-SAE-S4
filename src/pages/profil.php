<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Formulaire de profil </title>
    <link rel="icon" type="image/x-icon" href="../images/IUT.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css" type="text/css"/>
    <link rel="stylesheet" href="../style/header.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="../style/styleForm.css"/>
</head>


<body>
    <?php include '../pages/header_global.php'?>
    <?php include '../pages/header.php' ?> 
    
    <div id="container">

        <?php
        $f = new Factory();
        $aff = $f->getAffichageFormulaire();

        $aff->getFormulaireModifPassword();
        $aff->getFormulaireModifMail();
        $aff->getFormulaireSuppressionCompte();
        ?>
    </div>

</body>

</html>