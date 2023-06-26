<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulaire</title>
    <link rel="icon" type="image/x-icon" href="../images/IUT.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/header.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>


<body>
    <?php include '../pages/header_global.php' ?>
    <?php include '../pages/header.php' ?>

    <div id="form">
        <?php
            $f = new Factory();
            $f->getAffichageFormulaire()->getSondage();
        ?>
    </div>
</body>
    <script src="../js/classes/Factory.js" type="module/javascript"> </script>
    <script type="module">
        import { Factory } from '../js/classes/Factory.js';
        const f = new Factory();
        const c = f.getCategories();
    </script>
</html>