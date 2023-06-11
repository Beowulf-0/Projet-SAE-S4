
<?php
    session_start();
    
    $email = isset($_POST['mail'])?$_POST['mail']:'';
    $mdp = isset($_POST['mdp'])?$_POST['mdp']:'';

    if(verif_login($email, $mdp, $profil)){
        header("Location: ../pages/sondage.php");
    }
    else{
        header("Location: ../pages/page_login.php?erreur=1");
    }


    function verif_login($mail, $mdp, $profil){
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
            $result = $sel->fetchAll(PDO::FETCH_ASSOC);
            var_dump($result);
            var_dump(empty($result));

            if(!empty($result)){
                $profil = $result[0];
                var_dump($profil);
                $_SESSION['user_name'] = $profil['name_user'];
                $_SESSION['loggedIn'] = true;

                return true;
            }
            else{
                return false;
            }
            
        }
        else{
            return false;
        }
    }
?>
