<?php 
    session_start();

    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $tel = isset($_POST['tel']) ? $_POST['tel'] : '';
    $adresse = isset($_POST['adresse-postale']) ? $_POST['adresse-postale'] : '';
    $postal = isset($_POST['code-postal']) ? $_POST['code-postal'] : '';
    $ville = isset($_POST['ville']) ? $_POST['ville'] : '';

    $aliment_1 = isset($_POST['alim-1']) ? $_POST['alim-1'] : '';
    $aliment_2 = isset($_POST['alim-2']) ? $_POST['alim-2'] : '';
    $aliment_3 = isset($_POST['alim-3']) ? $_POST['alim-3'] : '';
    $aliment_4 = isset($_POST['alim-4']) ? $_POST['alim-4'] : '';

    $aliment_5 = isset($_POST['alim-5']) ? $_POST['alim-5'] : NULL;
    $aliment_6 = isset($_POST['alim-6']) ? $_POST['alim-6'] : NULL;
    $aliment_7 = isset($_POST['alim-7']) ? $_POST['alim-7'] : NULL;
    $aliment_8 = isset($_POST['alim-8']) ? $_POST['alim-8'] : NULL;
    $aliment_9 = isset($_POST['alim-9']) ? $_POST['alim-9'] : NULL;
    $aliment_10 = isset($_POST['alim-10']) ? $_POST['alim-10'] : NULL;

    create_surveyed($nom, $prenom, $date, $tel, $adresse, $postal, $ville, $aliment_1, 
    $aliment_2, $aliment_3, $aliment_4, $aliment_5, $aliment_6, $aliment_7, $aliment_8, $aliment_9, $aliment_10);

    //if(isset($_POST['alim-1']) && isset($_POST['alim-2']) && isset($_POST['alim-3']) && isset($_POST['alim-1'])){

    //}
    function create_surveyed($nom, $prenom, $date, $tel, $adresse, $postal, $ville, $alim_1, $alim_2, $alim_3, $alim_4, $alim_5, $alim_6, $alim_7, $alim_8, $alim_9, $alim_10){
        require('./config.php');
        if(check_alim($alim_1, $alim_2, $alim_3, $alim_4)){
            try{
                $select = "SELECT * FROM sondes WHERE NomSonde = :nom_s AND PrenomSonde = :prenom_s AND DateNaissance = :date_n_s";
                $sel = $pdo->prepare($select);
                $sel->bindParam(":nom_s", $nom);
                $sel->bindParam(":prenom_s", $prenom);
                $sel->bindParam(":date_n_s", $date);

                $bool = $sel->execute();
            }
            catch(PDOException $e){
                echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
		        die("STOP Catch Verif"); // On arrête tout.
            }

            if($bool){
                $result = $sel->fetchAll(PDO::FETCH_ASSOC);
                //var_dump(empty($result));
                //var_dump($result);
                if(empty($result)){
                    $insert = "INSERT INTO sondes(NomSonde, PrenomSonde, DateNaissance, Adresse, CodePostal, Ville, Tel, Aliment1, Aliment2, 
                    Aliment3, Aliment4, Aliment5, Aliment6, Aliment7, Aliment8, Aliment9, Aliment10) VALUES(:nom_s, :prenom_s, :date_n_s, 
                    :adresse_s, :code_p_s, :ville_s, :tel_s, :alim_1, :alim_2, :alim_3, :alim_4, :alim_5, :alim_6, :alim_7, :alim_8, :alim_9, :alim_10)";
                    $ins = $pdo->prepare($insert);
                    $ins->bindParam(":nom_s", $nom);
                    $ins->bindParam(":prenom_s", $prenom);
                    $ins->bindParam(":date_n_s", $date);
                    $ins->bindParam(":adresse_s", $adresse);
                    $ins->bindParam(":code_p_s", $postal);
                    $ins->bindParam(":ville_s", $ville);
                    $ins->bindParam(":tel_s", $tel);
                    $ins->bindParam(":alim_1", $alim_1);
                    $ins->bindParam(":alim_2", $alim_2);
                    $ins->bindParam(":alim_3", $alim_3);
                    $ins->bindParam(":alim_4", $alim_4);
                    $ins->bindParam(":alim_5", $alim_5);
                    $ins->bindParam(":alim_6", $alim_6);
                    $ins->bindParam(":alim_7", $alim_7);
                    $ins->bindParam(":alim_8", $alim_8);
                    $ins->bindParam(":alim_9", $alim_9);
                    $ins->bindParam(":alim_10", $alim_10);
                    
                    $ins->execute();
                    header('Location: ../pages/resultats.php');
                }
                else{
                    header("Location: ../pages/sondage.php?err=2");
                }
            }
            
        }
        else{
            header("Location: ../pages/sondage.php?err=1");
        }
    }
    function check_alim($alim_1, $alim_2, $alim_3, $alim_4) : bool
    {
        return ($alim_1 !== '' && $alim_2 !== '' && $alim_3 !== '' && $alim_4 !== '');
    }
?>