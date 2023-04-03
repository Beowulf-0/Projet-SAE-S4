
<?php
    session_start();
    

    function verif_login($mail, $mdp){
        require('./config.php');
        
        $select = "SELECT * FROM utilisateur WHERE mail_user=:mail_u AND pwd_user=:pwd_u";
        $sel= $pdo->prepare($select);
        $sel->bindParam(":mail_u",$mail);
        $sel->bindParam(":pwd_u",$mdp);

        $bool = $sel->execute();

        if($bool){
            $result = $sel->rowCount();
            var_dump($result);

            if($result !== 0){
                return $sel->fetchAll(PDO::FETCH_ASSOC);
            }
        }
    }
?>
