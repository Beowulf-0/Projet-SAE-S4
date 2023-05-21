<?php
    session_start();
    require("../pages/page_creation_compte.php");

    $mail = isset($_POST['mail'])? $_POST['mail']:'';
    $name = isset($_POST['name'])? $_POST['name']:'';
    $mdp = isset($_POST['mdp'])? $_POST['mdp']:'';
    $num = isset($_POST['num'])? $_POST['num']:'';

    //var_dump($mail, $name, $mdp, $num);

    verif_crea($mail, $name, $mdp, $num);

    function verif_crea($mail, $name, $mdp, $num){
        require('config.php');

        //var_dump($mail, $name, $mdp, $num);
        try{
            $select = "SELECT * from utilisateur where mail_user = :mail";
            $sel = $pdo->prepare($select);
            $sel->bindParam(":mail", $mail);
            $bool = $sel->execute();
        }
        catch(PDOException $e){
            echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
            die("STOP Catch Verif");
        }


        if($bool){
            $res = $sel->fetchAll(PDO::FETCH_ASSOC);
            var_dump(empty($res));


            if(empty($res)){
                $insert = "INSERT INTO utilisateur(mail_user, name_user, pwd_user, phone_user) VALUES (:mail_u, :name_u, :pwd_u, :phone_u)";
                $ins = $pdo->prepare($insert);
                $ins->bindParam(":mail_u", $mail);
                $ins->bindParam(":pwd_u", $mdp);
                $ins->bindParam(":phone_u", $num);
                $ins->bindParam(":name_u", $name);
                $ins->execute();
                header("Location: ../pages/page_login.php");
            }
            else{
                header('Location: ../pages/page_creation_compte.php?erreur=2'); 
            }

        }
        else{
            header("Location: ../pages/page_creation_compte.php?erreur=1");
        }
    }

?>