<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Création de compte</title>
    <link rel="icon" type="image/x-icon" href="../images/IUT.jpg">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/styleForm.css">
</head>


<body>
    <?php include '../pages/header_global.php'?>
    <div id="container">
        <?php
            $f = new Factory();
            $f->getAffichageFormulaire()->getFormulaireCreationCompte();
        ?>
    </div>

</body>

</html>