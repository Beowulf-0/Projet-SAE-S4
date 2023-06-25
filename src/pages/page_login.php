<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Connexion au compte</title>
    <link rel="icon" type="image/x-icon" href="../images/IUT.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/styleForm.css">
</head>


<body>
    <?php include '../pages/header_global.php'?>
    <div id="container">

        <?php
        $f = new Factory();
        $f->getAffichageFormulaire()->getFormulaireLogin();
        ?>
    </div>
</body>

</html>
