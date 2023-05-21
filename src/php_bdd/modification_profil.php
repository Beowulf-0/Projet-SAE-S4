<?php

    //$form = (isset($_POST["email_change"]) ? $ $_POST["email_change"] 
    //: isset($_POST["password_change"])) ? $_POST["password_change"] : $_POST["account_removal"];
    /*if(){

    }
    else{

    }*/
    /*if(isset($_POST['mot'])){
        echo $_POST['mot'];
    }*/

    if(isset($_POST['password_change'])){
        //var_dump(isset($_POST['password_change']));
        $mail = $_POST['mail'];
        $a_mdp = $_POST['a_mdp'];
        $n_mdp = $_POST['n_mdp'];
        $rn_mdp = $_POST['rn_mdp'];
        //var_dump($mail, $a_mdp, $n_mdp, $rn_mdp);
        password_change($mail, $a_mdp, $n_mdp, $rn_mdp);
    }
    elseif (isset($_POST['email_change']) && (isset($_POST['a_mail']) && isset($_POST['n_mail']))) {
        //var_dump(isset($_POST['email_change']));
        $a_mail = $_POST['a_mail'];
        $n_mail = $_POST['n_mail'];
        //var_dump($a_mail, $n_mail);

        email_change($a_mail, $n_mail);
    }
    elseif(isset($_POST['account_removal']) && (isset($_POST['mail']) && isset($_POST['pass']))){
        //var_dump(isset($_POST['account_removal']));
        $mail_u = $_POST['mail'];
        $passwd = $_POST['pass'];
        //var_dump($mail_u, $passwd);

        account_removal($mail_u, $passwd);
    }

    function email_change(string $a_mail, string $n_mail){
        require('../php_bdd/config.php');
        if($a_mail === $n_mail){
            header('Location: ../pages/profil.php?erreur_mail=1');
        }
        else{
            try{
                $select = "SELECT * FROM utilisateur where mail_user = :old_mail_u";
                $sel = $pdo->prepare($select);
                $sel->bindParam(":old_mail_u", $a_mail);
                $bool = $sel->execute();
                               
            }
            catch(PDOException $e){
                echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
                die("STOP Catch Verif");
            } 

            $res = $sel->fetchAll(PDO::FETCH_ASSOC);
            //var_dump(empty($res));
            
            if(!$bool){
                header('Location: ../pages/profil.php?erreur_mail=2');
            }
            else{   

                if(empty($res)){
                    header('Location: ../pages/profil.php?erreur_mail=3');
                }
                else{
                    $update = "UPDATE utilisateur SET mail_user = :new_mail_u where mail_user = :old_mail_u";
                    $up = $pdo->prepare($update);
                    $up->bindParam(":new_mail_u", $n_mail);
                    $up->bindParam(":old_mail_u", $a_mail);
                    $up->execute();
                    
                    header('Location: ../pages/profil.php?deconnexion=true');
                }
            }
        }
    }

    function password_change(string $mail, string $a_mdp, string $n_mdp, string $rn_mdp){
        require('../php_bdd/config.php');

        if($a_mdp === $n_mdp){
            header('Location: ../pages/profil.php?erreur_mdp=1');
        }
        else{
            try{
                if($a_mdp === $n_mdp || $n_mdp !== $rn_mdp){
                    header('Location: ../pages/profil.php?erreur_mdp=2');
                }
                else{
                    $update = "UPDATE utilisateur SET pwd_user = :pwd_u where mail_user = :mail_u";
                    $up = $pdo->prepare($update);
                    $up->bindParam(":pwd_u", $n_mdp);
                    $up->bindParam(":mail_u", $mail);

                    $up->execute();

                    header('Location: ../pages/profil.php?mdp_valide=1');
                }
            }
            catch(PDOException $e){
                echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
                die("STOP Catch Verif");
            }
        }
        
    }

    function account_removal(string $mail_user, string $password){
        require('../php_bdd/config.php');
        try{
            $select = "SELECT count(*) FROM utilisateur where mail_user = :mail_u AND pwd_user = :pwd_u";
            $sel = $pdo->prepare($select);
            $sel->bindParam(":mail_u", $mail_user);
            $sel->bindParam(":pwd_u", $password);
            $bool = $sel->execute();
        }
        catch(PDOException $e){
            echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
            die("STOP Catch Verif");
        }



        if(!$bool){
            header('Location: ../pages/profil.php?erreur_suppr=1');
        }
        else{
            $delete = "DELETE FROM utilisateur WHERE mail_user = :mail_u AND pwd_user = :pwd_u";
            $del = $pdo->prepare($delete);
            $del->bindParam(":mail_u", $mail_user);
            $del->bindParam(":pwd_u", $password);
            $del->execute();

            header('Location: ../pages/profil.php?deconnexion=true');
        }
    }
?>