<?php
    //require('config.php');
    //Méthode normale
    /*if(isset($_POST['mail']) && isset($_POST['mdp']) && isset($_POST['num'])){
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        $phone = $_POST['num'];


        $select = "SELECT count(*) from utilisateur where mail_user =". $mail. ";";

        $sel = $pdo->prepare($select);

        $query = "INSERT INTO utilisateur(mail_user, pwd_user, phone_user) VALUES (". $mail . ", " . $mdp . ", " .$phone . ")";
    }*/
    //méthode avec fonctions
    function verif_crea($mail, $mdp, $num){
        require('config.php');

        $select = "SELECT count(*) from utilisateur where mail_user =:mail";
        $sel = $pdo->prepare($select);
        $sel->bindParam(":mail", $mail);
        $bool = $sel->execute();

        if($bool){
            $res = $sel->fetchAll(PDO::FETCH_ASSOC);
            var_dump($res);

            if(count($res) == 0){
                $insert = "INSERT INTO utilisateur(mail_user, pwd_user, phone_user) VALUES (:mail_u, :pwd_u, :phone_u)";
                $ins = $pdo->prepare($insert);
                $ins->bindParam(":mail_us", $mail);
                $ins->bindParam(":pwd_u", $mdp);
                $ins->bindParam(":phone_u", $num);
                $ins->execute([$mail, $mdp, $num]);
                require("../pages/page_login.php");
            }
        }
    }

?>