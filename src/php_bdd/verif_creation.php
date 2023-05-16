<?php
    session_start();
    require("../pages/page_creation_compte.php");

    $mail = isset($_POST['mail'])? $_POST['mail']:'';
    $mdp = isset($_POST['mdp'])? $_POST['mdp']:'';
    $num = isset($_POST['num'])? $_POST['num']:'';

    var_dump($mail, $mdp, $num);

    verif_crea($mail, $mdp, $num);

    header("Location: ../pages/page_login.php");

    function verif_crea($mail, $mdp, $num){
        require('config.php');

        $url= "../pages/page_login.php";
        try{
            $select = "SELECT count(*) from utilisateur where mail_user =:mail";
            $sel = $pdo->prepare($select);
            $sel->bindParam(":mail", $mail);
            $bool = $sel->execute();
        }
        catch(PDOException $e){
            echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
            die("STOP Catch Verif");
        }

        //var_dump($select);
        //die("test");
        if($bool){
            var_dump($sel->fetchAll(PDO::FETCH_ASSOC));
            $res = $sel->fetchAll(PDO::FETCH_ASSOC);
            var_dump($res);

            if(count($res) == 0){
                $insert = "INSERT INTO utilisateur(mail_user, pwd_user, phone_user) VALUES (:mail_u, :pwd_u, :phone_u)";
                $ins = $pdo->prepare($insert);
                $ins->bindParam(":mail_u", $mail);
                $ins->bindParam(":pwd_u", $mdp);
                $ins->bindParam(":phone_u", $num);
                $ins->execute();
                var_dump($res);

                
                return true;
            }
            else{
                header('Location: ../pages/page_creation_compte.php?erreur=2');
            }
        }
        else{
            header('Location: ../pages/page_creation_compte.php?erreur=1');
        }
    }

?>