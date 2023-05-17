
<?php
    session_start();
    
    //if(array_key_exists(, $_SESSION) && count($_SESSION[]))
    /**
     * Pour envoyer les données : post ou get
     * Dans ce script
     */
    /*$email = $_POST['email_user'];
    $mdp = $_POST['pwd_user'];
    echo $email . " " . $mdp;*/
    $email = isset($_POST['mail'])?$_POST['mail']:'';
    $mdp = isset($_POST['mdp'])?$_POST['mdp']:'';

    if(!verif_login($email, $mdp)){
        header("Location: ../pages/page_login.php?erreur=1");
    }
    else{
        //var_dump($profil);
        //$_SESSION['profil'] = $profil;
        header("Location: ../pages/accueil.php");
    }


    function verif_login($mail, $mdp){
        require('./config.php');
        try{
            $select = "SELECT * FROM utilisateur WHERE mail_user=:mail_u AND pwd_user=:pwd_u";
            $sel= $pdo->prepare($select);
            $sel->bindParam(":mail_u",$mail);
            $sel->bindParam(":pwd_u",$mdp);
            $bool = $sel->execute();
        }
        catch(PDOException $e){
            echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
		    die("STOP Catch Verif"); // On arrête tout.
        }


        if($bool){
            //echo $bool;
            $result = $sel->fetchAll();
            //echo $result;

            if(count($result) !== 0){
                //$profil = $result[0];
                //var_dump($profil);
                //die("fin connexion");
                return true;
            }
            return false;
        }
        else{
            header("Location: ../pages/page_login.php?erreur=2");
            return false;
        }
    }
?>
